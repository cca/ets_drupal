<?php

/**
 * @file
 * template.php
 */

function cca_bootstrap_preprocess_html(&$variables) {
  // Load font-awesome
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(
    'type' => 'external'
  ));
}

function cca_bootstrap_preprocess_region(&$variables) {
  $variables['theme_hook_suggestions'][] = 'region__' . $variables['region'];
  // Get drupal search form for use in bootstrap nav bar
  $block = module_invoke('search', 'block_view', 'search');
  $variables['search_box'] = render($block);
}

/**
 * Overrides theme_menu_link().
 */
function cca_bootstrap_menu_link__menu_block(&$variables) {
  return theme_menu_link($variables);
}