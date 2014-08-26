<?php
/**
 * @file
 * staff_content_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function staff_content_type_node_info() {
  $items = array(
    'staff' => array(
      'name' => t('Staff'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Staff Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
