<?php
// $Id: page.tpl.php,v 1.13 2008/09/15 08:31:58 johnalbin Exp $

/**
 * @file page.tpl.php
 *
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the current
 *   path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing primary navigation links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links for
 *   the site, if they have been configured.
 *
 * Page content (in order of occurrance in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 *
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the view
 *   and edit tabs when displaying a node).
 *
 * - $content: The main content of the current Drupal page.
 *
 * - $right: The HTML for the right sidebar.
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="CCA Educational Technology Services" />
  <?php print $head; ?>
  <?php print $styles; ?>
  <link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/ets/css/sections/home.css" />
  <?php print $scripts; ?>
</head>
<body>
<div id="content-top">
	<?php print $content_top; ?>
</div>
  <div id="page">
    	<div id="header">
    	
    	 <!-- Google custom search module !-->		
      <?php if ($search_bar): ?>
		<div id="search">
			<?php print $search_bar; ?>
		</div>
		<?php endif; ?>
	  <!-- End Google custom search module !-->	
    	
    	<div id="logo">
    	<a href="<?php print $base_path; ?>" title="<?php print t('CCA Educational Technology Services'); ?>" rel="home"><img src="/sites/all/themes/ets/images/logo.march.png" alt="CCA Educational Technology Services" /></a>
    	</div>
    	
    	<?php print $navigation; ?>
    	
		</div><!-- header -->
		

    	<div id="main">
    	
    	<?php if ($sidebar_first): ?>
		<div id="sidebar-left">
     	<?php 
     	//Load homepage rotor banners
     	print $sidebar_first;
     	?>
		</div> <!-- /#sidebar-left -->
		<?php endif; ?>
    	
        <div id="content">
        <?php print $content; ?>
        </div>
        
        <?php if ($content_bottom): ?>
		<div id="content-bottom">
		<img class="twitter-logo" src="/sites/all/themes/ets/images/twitter_t.png" />
     	<?php 
     	//Load homepage twitter feed
     	print $content_bottom;
     	?>
		</div> <!-- /#content-bottom -->
		<?php endif; ?>
		
		</div> <!-- /#main -->
		
    	<?php if ($footer or $footer_message): ?>
    	  <div id="footer">
    	  <img src="/sites/all/themes/ets/images/color_bar.jpg" />
      	  <?php print $footer; ?>
     	 </div> <!-- /#footer -->
   		 <?php endif; ?>
   		 
</div> <!-- #page -->
  		<?php print $closure; ?>
</body>
</html>