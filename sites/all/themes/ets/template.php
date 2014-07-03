<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to ets_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: ets_breadcrumb()
 *
 *   where ets is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Implementation of HOOK_theme().
 */
function ets_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}


/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function ets_breadcrumb($breadcrumb) {
  // Determine if we are to display the breadcrumb.
  $alias = explode('/', drupal_get_path_alias($_GET['q']));
  
  $show_breadcrumb = theme_get_setting('zen_breadcrumb');
  if ($show_breadcrumb == 'yes' || $show_breadcrumb == 'admin' && arg(0) == 'admin') {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('zen_breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {    
   	  $breadcrumb[0] = l('ETS Home',NULL); 
      $breadcrumb_separator = theme_get_setting('zen_breadcrumb_separator');
      $trailing_separator = $title = '';
      
      if ($alias[0] == "news" && $alias[1] != NULL && $alias[2] == NULL){
		$breadcrumb[3] = NULL;
	  }
	  elseif ($alias[0] == "news" && $alias[1] != NULL && $alias[2] != NULL){
	  	$title = drupal_get_title();
		$breadcrumb[1] = l('News & Updates', 'news');
		$breadcrumb[2] = NULL;
	  }
      elseif (theme_get_setting('zen_breadcrumb_title')) {
        if ($title = drupal_get_title()) {
          $trailing_separator = $breadcrumb_separator;
        }
      }
      elseif (theme_get_setting('zen_breadcrumb_trailing')) {
        $trailing_separator = $breadcrumb_separator;
      }
      
      return '<div class="breadcrumb">' . implode($breadcrumb_separator, $breadcrumb) . "$trailing_separator$title</div>";
    }
  }
  // Otherwise, return an empty string.
  return '';
}

// Show tags associated with a news entry
function ets_get_tags($node, $type) {
  $out = '';
  // related news
  $terms = taxonomy_node_get_terms($node);
  if (is_array($terms) && $type) {
    // get tag names
    foreach ($terms as $term) {
  	  $tags[] = $term->name;
    }
    // sort tag names
    sort($tags);
    // print tag names as links to news categories
    foreach ($tags as $tag) {
      // exclude some tags
      if (!in_array(strtolower($tag), $exclude)) {
        $url = str_replace(' ', '-', strtolower($tag));
        $out.= '<a href="/' . $type . '/' . $url . '">' . str_replace(' ', '&nbsp;', $tag) . '</a> ';
      }
    }
    return $out;
  } else {
  	return NULL;
  }
}

/* embed wrappers */
// youtube
function ets_embed_youtube($url, $width, $height) {
  if ($url && $width && $height) {
  	// some url formatting
  	$url = str_replace('watch?v=', 'v/', $url);
  	// build embed code output
    $out = '';
    $out.= '<object width="' . $width . '"';
    $out.= ' height="' . $height . '">';
    $out.= '<param name="movie" value="' . $url . '&hl=en&fs=1"></param>';
    $out.= '<param name="allowFullScreen" value="true"></param>';
    $out.= '<param name="allowscriptaccess" value="always"></param>';
    $out.= '<embed src="' . $url . '&hl=en&fs=1"';
    $out.= ' type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"';
    $out.= ' width="' . $width . '" height="' . $height . '"></embed></object>';
    return $out;
  } else {
  	return 'Missing youtube data';
  }
}



// Make links on external sites open in new tabs
drupal_add_js ('$(document).ready(function(){ $(\'a[@href^="http"]\').each(function(){$(this).attr({ target: "_blank" });}); } );', 'inline' );

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function ets_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function ets_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function ets_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // ets_preprocess_node_page() or ets_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $vars['node']->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function ets_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function ets_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */
