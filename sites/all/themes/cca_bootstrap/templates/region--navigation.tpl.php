<?php
/**
 * @file
 * region--navigation.tpl.php
 *
 * Default theme implementation to display the "navigation" region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $attributes: String of attributes that contain things like classes and ids.
 * - $content_attributes: The attributes used to wrap the content. If empty,
 *   the content will not be wrapped.
 * - $region: The name of the region variable as defined in the theme's .info
 *   file.
 * - $page: The page variables from bootstrap_process_page().
 *
 * Helper variables:
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see bootstrap_preprocess_region().
 * @see bootstrap_process_page().
 *
 * @ingroup themeable
 */
?>
<div id="wrap">
<?php if ($page['logo'] || $page['site_name'] || $page['primary_nav'] || $page['secondary_nav'] || $content): ?>
  <div class="navbar navbar-default navbar-static-top">
    <?php if ($content_attributes): ?><div<?php print $content_attributes; ?>><?php endif; ?>
    <div class="navbar-header">
      <?php if ($page['logo']): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $page['front_page']; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $page['logo']; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if ($page['site_name']): ?>
        <a class="name navbar-brand" href="<?php print $page['front_page']; ?>" title="<?php print t('Home'); ?>"> ETS @ <i class="nav-c-logo"></i><i class="nav-c-logo"></i><i class="nav-a-logo"></i></a>
      <?php endif; ?>
      <?php if ($page['primary_nav'] || $page['secondary_nav'] || $content): ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php endif; ?>
    </div>
    <?php if ($page['primary_nav'] || $page['secondary_nav'] || $content): ?>
    <div class="navbar-collapse collapse pull-right">

      <nav role="navigation">
        <?php print render($page['primary_nav']); ?>
        <!-- search -->
        <ul class="menu nav navbar-nav">
          <li class="expanded dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <div class="dropdown-menu search"><?php print $search_box; ?></div>
          </li>
        </ul>
      </nav>
    </div>
    <?php endif; ?>
    <?php if ($content_attributes): ?></div><?php endif; ?>
  </div>
<?php endif; ?>