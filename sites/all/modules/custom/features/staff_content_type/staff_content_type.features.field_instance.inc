<?php
/**
 * @file
 * staff_content_type.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function staff_content_type_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-staff-field_profile_id'
  $field_instances['node-staff-field_profile_id'] = array(
    'bundle' => 'staff',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_profile_id',
    'label' => 'Profile Id',
    'required' => 1,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'entityreference',
      'settings' => array(
        'match_operator' => 'CONTAINS',
        'path' => '',
        'size' => 60,
      ),
      'type' => 'entityreference_autocomplete_tags',
      'weight' => -4,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Profile Id');

  return $field_instances;
}
