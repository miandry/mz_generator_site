<?php

namespace Drupal\mz_generator_site;

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Entity\Entity\EntityViewDisplay;

/**
 * Helper class to programmatically create the mz_generator_site node type.
 */
class NodeTypeInstaller {

  /**
   * Install node type and all its fields.
   */
  public static function install() {
    $type_id = 'mz_generator_site';

    // 1. Create Node Type
    $node_type = NodeType::load($type_id);
    if (!$node_type) {
      $node_type = NodeType::create([
        'type' => $type_id,
        'name' => 'Mz Generator Site',
        'description' => 'Node type for managing and generating sites.',
        'new_revision' => TRUE,
        'preview_mode' => 0,
        'display_submitted' => TRUE,
        'status' => TRUE,
      ]);

      if (\Drupal::moduleHandler()->moduleExists('menu_ui')) {
        $node_type->setThirdPartySetting('menu_ui', 'available_menus', ['main']);
        $node_type->setThirdPartySetting('menu_ui', 'parent', 'main:');
      }

      $node_type->save();
    }

    // 2. Fields
    self::ensureField('field_mz_generator_site_name', 'string', 'Mz Generator Site Name');
    self::ensureField('field_mz_generator_site_domain', 'string', 'Mz Generator Site Domain');

    // Taxonomy reference field: Application
    self::ensureTaxonomyField('field_application', 'Application', 'application');

    // 3. Form Display
    $form_display = EntityFormDisplay::load("node.$type_id.default");
    if (!$form_display) {
      $form_display = EntityFormDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => $type_id,
        'mode' => 'default',
        'status' => TRUE,
      ]);
    }

    $form_display->setComponent('title', [
      'type' => 'string_textfield',
      'weight' => -5,
    ]);

    $form_display->setComponent('status', [
      'type' => 'boolean_checkbox',
      'weight' => 120,
    ]);

    $form_display->setComponent('field_mz_generator_site_name', [
      'type' => 'string_textfield',
      'weight' => 121,
      'settings' => ['size' => 60],
    ]);

    $form_display->setComponent('field_mz_generator_site_domain', [
      'type' => 'string_textfield',
      'weight' => 122,
      'settings' => ['size' => 60],
    ]);

    $form_display->setComponent('field_application', [
      'type' => 'options_select',
      'weight' => 119,
    ]);

    $form_display->save();

    // 4. View Display
    $view_display = EntityViewDisplay::load("node.$type_id.default");
    if (!$view_display) {
      $view_display = EntityViewDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => $type_id,
        'mode' => 'default',
        'status' => TRUE,
      ]);
    }

    $view_display->setComponent('field_application', [
      'label' => 'above',
      'type' => 'entity_reference_label',
      'weight' => 0,
      'settings' => ['link' => FALSE],
    ]);

    $view_display->setComponent('field_mz_generator_site_name', [
      'label' => 'above',
      'type' => 'string',
      'weight' => 1,
    ]);

    $view_display->setComponent('field_mz_generator_site_domain', [
      'label' => 'above',
      'type' => 'string',
      'weight' => 2,
    ]);

    $view_display->save();
  }

  /**
   * Uninstall everything.
   */
  public static function uninstall() {
    $type_id = 'mz_generator_site';

    // Delete nodes
    $storage = \Drupal::entityTypeManager()->getStorage('node');
    $nodes = $storage->loadByProperties(['type' => $type_id]);
    if ($nodes) {
      $storage->delete($nodes);
    }

    // Delete node type
    $node_type = NodeType::load($type_id);
    if ($node_type) {
      $node_type->delete();
    }

    // Delete fields
    $fields = [
      'field_mz_generator_site_name',
      'field_mz_generator_site_domain',
      'field_application',
    ];

    foreach ($fields as $field_name) {
      $storage = FieldStorageConfig::loadByName('node', $field_name);
      if ($storage) {
        $storage->delete();
      }
    }
  }

  /**
   * Ensure simple field.
   */
  protected static function ensureField($field_name, $type, $label) {
    if (!FieldStorageConfig::loadByName('node', $field_name)) {
      FieldStorageConfig::create([
        'field_name' => $field_name,
        'entity_type' => 'node',
        'type' => $type,
        'cardinality' => 1,
        'settings' => ['max_length' => 255],
      ])->save();
    }

    if (!FieldConfig::loadByName('node', 'mz_generator_site', $field_name)) {
      FieldConfig::create([
        'field_name' => $field_name,
        'entity_type' => 'node',
        'bundle' => 'mz_generator_site',
        'label' => $label,
        'required' => FALSE,
      ])->save();
    }
  }

  /**
   * Ensure taxonomy reference field.
   */
  protected static function ensureTaxonomyField($field_name, $label, $vocabulary) {

    // Field storage
    if (!FieldStorageConfig::loadByName('node', $field_name)) {
      FieldStorageConfig::create([
        'field_name'  => $field_name,
        'entity_type' => 'node',
        'type'        => 'entity_reference',
        'settings'    => [
          'target_type' => 'taxonomy_term',
        ],
        'cardinality' => 1,
      ])->save();
    }

    // Field instance
    if (!FieldConfig::loadByName('node', 'mz_generator_site', $field_name)) {
      FieldConfig::create([
        'field_name'  => $field_name,
        'entity_type' => 'node',
        'bundle'      => 'mz_generator_site',
        'label'       => $label,
        'required'    => TRUE,
        'settings'    => [
          'handler' => 'default:taxonomy_term',
          'handler_settings' => [
            'target_bundles' => [
              $vocabulary => $vocabulary,
            ],
          ],
        ],
      ])->save();
    }
  }

}
