<?php if ($page['navigation']): ?>
  <?php print render($page['navigation']); ?>
<?php endif; ?>

<div class="main-container container">

  <?php if ($page['home_links']): ?>
    <?php print render($page['home_links']); ?>
  <?php endif; ?>

  <div class="row row-wireframe row-2">

    <div class="col-sm-8 announcements">

      <?php if ($page['home_news']): ?>
        <?php print render($page['home_news']); ?>
      <?php endif; ?>

    </div><!-- /.announcements -->

    <div class="col-sm-4 resources">

      <?php if ($page['home_resources']): ?>
        <?php print render($page['home_resources']); ?>
      <?php endif; ?>

      <!--
      <h3>Resources</h3>
      <div><h4>Students</h4></div>
      <div><h4>Faculty & Staff</h4></div>
      <div><h4>Resources</h4></div>
      -->
    </div>

  </div>
</div><!-- /#main-container -->
<div id="push"></div>
</div><!-- /#wrap -->
<?php print render($page['footer']); ?>
