<?php

namespace Drupal\mz_generator_site;


use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class GenerateService.
 */
class GenerateSiteService
{
    /**
     * Constructs a new GenerateService object.
     */
    public function __construct()
    {
    }
    public function root_path()
    {
        $config = \Drupal::config("mz_generator_site.settings");
        $root_path = $config->get("root_path");
        if ($config->get("root_path") == null) {
            $root_path = DRUPAL_ROOT;
        }
        return $root_path;
    }

    // copy default site to current site
    public function generateSite($node)
    {
        $root_path = $this->root_path();
        $site_name = $node->field_mz_generator_site_name->value;
        $module_handler = \Drupal::service("module_handler");
        $path = $module_handler->getModule("mz_generator_site")->getPath();
        $default_url = DRUPAL_ROOT . "/" . $path . "/data/site/";
        $site_url = $root_path . "/sites/" . $site_name;
        return $this->recurse_copy($default_url, $site_url);
    }
    public function recurse_copy($src, $dst)
    {
        $fileSystem = \Drupal::service("file_system");
        if (!is_dir($dst)) {
            if ($fileSystem->mkdir($dst, 0777, true) === false) {
                \Drupal::logger('mz_generator_site')->error("Failed to create directory " . $dst);
                //   $this->is_not_ready = true;
                return false;
            }
        }
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if ($file != "." && $file != "..") {
                if (is_dir($src . "/" . $file)) {
                    if (@chmod($src . "/" . $file, 0777) === false) {
                        \Drupal::logger('mz_generator_site')->error(
                            "Failed to change permission of  folder " .
                            $src .
                            "/" .
                            $file
                        );
                    }
                    if (
                        $fileSystem->mkdir($dst . "/" . $file, 0777, true) ===
                        false
                    ) {
                        \Drupal::logger('mz_generator_site')->error(
                            "Failed to create directory " . $src . "/" . $file
                        );
                        return false;
                    }
                    $this->recurse_copy($src . "/" . $file, $dst . "/" . $file);
                } else {
                    copy($src . "/" . $file, $dst . "/" . $file);
                    if (@chmod($dst . "/" . $file, 0777) === false) {
                        $file_path = $dst . "/" . $file;
                        \Drupal::logger('mz_generator_site')->error(
                            "Failed to change permission file " . $file_path
                        );
                    }
                }
            }
        }
        closedir($dir);
        return true;
    }
    public function domain_build($site_name)
    {
        $config = \Drupal::config("mz_generator_site.settings");
        $domain_name = $config->get("domain_name");
        return "https://" . $site_name . "." . $domain_name;
    }
    public function process($node)
    {
        $newDB = $node->field_mz_generator_site_name->value;
        $dbsource = $node->field_application->value;
        $this->createDatabase($newDB);
        $this->generateSite($node);
        $this->configSiteDB($node);
        $this->configSite($node);
        \Drupal\mz_generator_site\GenerateSiteService::import($dbsource,$newDB);
        //  $this->cloneDatabaseContentV2($node->id(),$newDB);
    }
    function createDatabase($newDB)
    {
        $config = \Drupal::config("mz_generator_site.settings");
        //$config->get('root_path') == null
        if (
            $config->get("host") == null &&
            $config->get("user") == null &&
            $config->get("password") == null
        ) {
            $message =
                "Please setting database settings in admin/config/site_manager";
            $messenger = \Drupal::messenger();
            $messenger->addMessage($message, "error");
            return false;
        }
        $messenger = \Drupal::messenger();
        $host = $config->get("host");
        $password = $config->get("password");
        $user = $config->get("user");
        $conn = new \MySQLi($host, $user, $password);
        // Check connection
        if ($conn->connect_error) {
            $message = "Connection failed: " . $conn->connect_error;
            $messenger->addMessage($message, "error");
        }
        // Check if the database already exists
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$newDB'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $message = "Database '$newDB' already exists.";
            $messenger->addMessage($message, "error");
        } else {
            // Create database
            $sql = "CREATE DATABASE " . $newDB;
            if ($conn->query($sql) === true) {
                $message = "Database " . $newDB . " created successfully ";
                \Drupal::logger("mz_generator_site")->error($message);
            } else {
                $message = "Error creating database: " . $conn->error;
                $messenger->addMessage($message, "error");
            }
        }
        $conn->close();
    }
    public static function is_exist($name)
    {
        $query_factory = \Drupal::entityQuery("node");
        $query_factory->condition("type", "site");
        $query_factory->condition("title", $name);
        $result = $query_factory->execute();
        if (!empty($result)) {
            return true;
        }
        return false;
    }
    public function configSiteDB($node)
    {
        $config = \Drupal::config("mz_generator_site.settings");
        $host = $config->get("host");

        $site_name = $node->field_mz_generator_site_name->value;
        $site_id = $node->id();
        $site_label = $node->label();

        // Get the current user.
        $current_user = \Drupal::currentUser();
        $uid = $current_user->id();
        $email = $current_user->getEmail();
        $username = $current_user->getAccountName();

        $site_name_db = $site_name;
        $site_settings =
            $this->root_path() . "/sites/" . $site_name . "/settings.php";

        global $base_url;
        $parent_site = $base_url;

        $content_settings = file_get_contents(
            $site_settings,
            FILE_USE_INCLUDE_PATH
        );
        $content_settings = str_replace(
            "{{site_name}}",
            $site_name_db,
            $content_settings
        );
        $content_settings = str_replace(
            "{{default_config}}",
            $site_name,
            $content_settings
        );
        $content_settings = str_replace(
            "{{site_label}}",
            $site_label,
            $content_settings
        );
        $content_settings = str_replace(
            "{{parent_site}}",
            $parent_site,
            $content_settings
        );

        $content_settings = str_replace(
            "{{site_id}}",
            $site_id,
            $content_settings
        );
        $content_settings = str_replace("{{uid}}", $uid, $content_settings);
        $content_settings = str_replace("{{email}}", $email, $content_settings);
        $content_settings = str_replace(
            "{{username}}",
            $username,
            $content_settings
        );

        $pass = $config->get("password");
        $user = $config->get("user");

        $content_settings = str_replace(
            "{{user_database}}",
            $user,
            $content_settings
        );
        $content_settings = str_replace(
            "{{pass_database}}",
            $pass,
            $content_settings
        );
        $content_settings = str_replace(
            "{{name_database}}",
            $site_name,
            $content_settings
        );

        if (file_put_contents($site_settings, $content_settings) === false) {
            $message = "Failed to write file " . $site_settings;
            $messenger = \Drupal::messenger();
            $messenger->addMessage($message, "error");
            return false;
        }
        return true;
    }
    public function getHostURL($url)
    {
        // Sample URL
        //$url = 'http://example.com:8080/path/to/resource';
        // Parse the URL
        $urlComponents = parse_url($url);
        $domaine_name = $urlComponents["host"];
        // Check if a port is specified in the URL
        if (isset($urlComponents["port"])) {
            $port = $urlComponents["port"];
            $domaine_name = $port . "." . $domaine_name;
        }
        return $domaine_name;
    }
    /** Add domain in sites.php */
    public function configSite($node)
    {
        $site_name = $node->field_mz_generator_site_name->value;
        $domain = $node->field_mz_generator_site_domain->value;
        $domaine_name = $this->getHostURL($domain);
        $site_settings = $this->root_path() . "/sites/sites.php";
        // Check if the file exists
        if (!file_exists($site_settings)) {
            // Create the file and add "<?php " at the beginning
            $file_content = "<?php\n";  // Content to write to the file
            $file_created = file_put_contents($site_settings, $file_content);

            if ($file_created === false) {
                $message = "Failed to create file sites.php";
                $messenger = \Drupal::messenger();
                $messenger->addMessage($message, "error");
            }
        }

        $content_settings = file_get_contents(
            $site_settings,
            FILE_USE_INCLUDE_PATH
        );
        $new =
            PHP_EOL .
            "&#36;sites['" .
            $domaine_name .
            "'] =  '" .
            $site_name .
            "';";
        $new = html_entity_decode($new);
        if (strpos($content_settings, $new) !== false) {
            $message = "Site " . $domaine_name . " exist already in sites.php";
            $messenger = \Drupal::messenger();
            $messenger->addMessage($message, "error");
            return false;
        } else {
            $content_settings = $content_settings . $new;
            if (
                file_put_contents($site_settings, $content_settings) === false
            ) {
                $message = "Failed to write file " . $site_settings;
                $messenger = \Drupal::messenger();
                $messenger->addMessage($message, "error");
                return false;
            }
        }
        return true;
    }


    public function cloneDatabaseContentV2($id, $newDB)
    {
        $config = \Drupal::config("mz_generator_site.settings");
        //$config->get('root_path') == null

        $host = $config->get("host");
        $password = $config->get("user");
        $user = $config->get("password");
        $module_handler = \Drupal::service('module_handler');
        $path = $module_handler->getModule('mz_generator_site')->getPath();
        $file = DRUPAL_ROOT . "/" . $path . "/data/template.sql";
        $this->splitSQLImportBatch($id, $host, $user, $password, $newDB, $file);
    }
    function splitSQLImportBatch($id, $host, $user, $password, $newDB, $file, $delimiter = ';')
    {
        set_time_limit(0);
        $batch = [
            'title' => t('Web site installing  ...'),
            'operations' => [],
            'init_message' => t('Starting ..'),
            'progress_message' => t('Processd @current out of @total.'),
            'error_message' => t('An error occurred during processing.'),
            'finished' => 'Drupal\mz_generator_site\GenerateSiteService::buildFinishedCallback',
        ];

        if (is_file($file) === true) {
            $file = fopen($file, 'r');

            if (is_resource($file) === true) {
                $query = array();

                while (feof($file) === false) {
                    $query[] = fgets($file);

                    if (preg_match('~' . preg_quote($delimiter, '~') . '\s*$~iS', end($query)) === 1) {
                        $query = trim(implode('', $query));
                        $input['user'] = $user;
                        $input['host'] = $host;
                        $input['password'] = $password;
                        $input['newDB'] = $newDB;
                        $input['query'] = $query;
                        $input['site_id'] = $id;

                        $batch['operations'][] = [
                            '\Drupal\mz_generator_site\GenerateSiteService::processBatchImportSql',
                            [$input]
                        ];
                        while (ob_get_level() > 0) {
                            ob_end_flush();
                        }

                        flush();
                    }

                    if (is_string($query) === true) {
                        $query = array();
                    }
                }

                //   $t = array_unique($status);
                //     if(!empty($t) && sizeof($t) == 1 && $t[0] == true){

                //    }
                batch_set($batch);
                return fclose($file);
            }
        }
        return false;
    }

    /**
     *
     */
    public static function processBatchImportSql($input, &$context)
    {
        $query = $input['query'];
        $host = $input['host'];
        $user = $input['user'];
        $password = $input['password'];
        $newDB = $input['newDB'];
        $connection = new \MySQLi($host, $user, $password, $newDB);
        $messenger = \Drupal::messenger();
        /* check connection */
        if ($connection->connect_error) {
            $messenger->addMessage("Database Connection Failed" . $connection->connect_error, 'error');
            exit();
        }
        // $selectdb_new = mysqli_select_db($connection, $newDB) or $messenger->addMessage("Database could not be selected", 'error');
        //  $status = mysqli_query($connection, $query);
        // $messenger = \Drupal::messenger();
        if ($connection->query($query) === TRUE) {
            //  echo "Record inserted successfully\n";
            // \Drupal::logger('site_manager')->notice('Record inserted successfully\n');
        } else {
            \Drupal::logger('mz_generator_site')->error("Error inserting record: " . $connection->error);
            //  echo "Error inserting record: " . $conn->error . "\n";
        }
        $connection->close();
        $context['results']['site_id'] = $input['site_id'];

    }
    public static function buildFinishedCallback($success, $results, $operations)
    {
        if ($success) {
            $message = t('Build site done');
            $messenger = \Drupal::messenger();
            $messenger->addMessage($message);

        }
        // $results['connection']->close();
        $id = $results['site_id'];
        $external_url = "/node/" . $id;
        return new RedirectResponse($external_url);
    }
    public static function import($dbsource,$dbname){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $config = \Drupal::config("mz_generator_site.settings");
        $servername = $config->get('host'); // Replace with your server name
        $username = $config->get('user'); // Replace with your database username
        $password =  $config->get('password');

        $path = \Drupal::service('file_system')->realpath('public://');
        $sqlFile =  $path ."/".$dbsource.".sql";
    
        // Command to import the database
        $command = "mysql -h $servername -u $username -p$password $dbname < $sqlFile";

            // Execute the command
        $output = null;
        $return_var = null;
        exec($command, $output, $return_var);
        // Check if the command was successful
        return ['return' => $return_var, 'output'=> $output];
    }
    public static function dump($database) {

        $config = \Drupal::config("mz_generator_site.settings");
        $host = escapeshellarg($config->get('host'));
        $user = escapeshellarg($config->get('user'));
        $pass = escapeshellarg($config->get('password'));
        $db   = escapeshellarg($database);
    
        $path = \Drupal::service('file_system')->realpath('public://');
        $file = $path . "/" . $database . ".sql";
        $fileEsc = escapeshellarg($file);
    
        // 1. Dump database
        $dumpCmd = "mysqldump --no-defaults --comments=FALSE --host={$host} --user={$user} --password={$pass} {$db} > {$fileEsc} 2>&1";
        exec($dumpCmd, $output, $status);
    
        if ($status !== 0 || !file_exists($file) || filesize($file) === 0) {
            \Drupal::messenger()->addMessage("Backup failed.", 'error');
            \Drupal::logger('mz_generator_site')->error(implode("\n", $output));
            return;
        }
    
        // 2. Cleanup (macOS sed requires -i '')
        $cleanCmd = "sed -i '' '/^--/d; /\\/\\*!/d' {$fileEsc} 2>&1";
        exec($cleanCmd, $output2, $status2);
    
        if ($status2 !== 0) {
            \Drupal::messenger()->addMessage("Backup created, but cleanup failed.", 'warning');
            \Drupal::logger('mz_generator_site')->warning(implode("\n", $output2));
            return;
        }
    
        \Drupal::messenger()->addMessage("Backup and cleanup succeeded.");
    }
 
}
