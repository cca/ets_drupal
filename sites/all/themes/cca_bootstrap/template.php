<?php

/**
 * @file
 * template.php
 */

function cca_bootstrap_preprocess_html(&$vars) {

  // Load font-awesome
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(
    'type' => 'external'
  ));

}
