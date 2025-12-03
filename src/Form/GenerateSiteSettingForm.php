<?php

namespace Drupal\mz_generator_site\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Class SiteSettingForm.
 */
class GenerateSiteSettingForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'mz_generator_site.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mz_generator_site_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('mz_generator_site.settings');
    $domain_name = $config->get('domain_name');
    $root_path = $config->get('root_path');
    $form['domain_name'] = [
      '#title' => $this->t('Host domain'),
      '#default_value' => isset($domain_name)?$domain_name:'',
      '#description' => $this->t('Par example : localhost or 127.0.0.1'),
      '#type' => 'textfield'
    ];
    $form['root_path'] = [
      '#title' => $this->t('Root path'),
      '#default_value' => isset($root_path )?  $root_path :'',
      '#description' => $this->t('Path of drupal where site will be build'),
      '#type' => 'textfield'
    ];

    $form['database_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Database parameters'),
        '#description' => $this->t('Settings database where you want to create db for generated sites'),
      '#open' => FALSE,
      '#tree' => TRUE,
    ];

    $host = $config->get('host');
    $form['database_settings']['host'] = [
      '#title' => $this->t('Host'),
      '#default_value' => isset($host)?$host:'',
      '#description' => $this->t('Par example : localhost or 127.0.0.1'),
      '#type' => 'textfield'
    ];
      $user = $config->get('user');
      $form['database_settings']['user'] = [
          '#title' => $this->t('User'),
          '#default_value' => isset($user)?$user:'',
          '#type' => 'textfield'
      ];
      $password = $config->get('password');
    $form['database_settings']['password'] = [
          '#title' => $this->t('Password'),
          '#default_value' => isset($password)?$password:'',
          '#type' => 'password'
    ];


    

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $values = $form_state->getValues();
    $this->config('mz_generator_site.settings')
      ->set('password', $values['database_settings']['password'])
      ->set('host', $values['database_settings']['host'])
      ->set('domain_name', $values['domain_name'])
      ->set('user', $values['database_settings']['user'])
      ->set('root_path', $values['root_path'])
     ->save();
  }

}
