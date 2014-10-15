<?php if ($page['navigation']): ?>
  <?php print render($page['navigation']); ?>
<?php endif; ?>

<div class="main-container container">

  <h3>Take me to...</h3>

  <div class="row quicklinks">
    
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-accounts"></i><h4>My CCA User Account</h4></div></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-helpdesk"></i><h4>Help Desk & How-Tos</h4></div></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-moodle"></i><h4>Moodle</h4></div></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-equipment"></i><h4>Equipment Checkout</h4></div></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-hours"></i><h4>Service Hours</h4></div></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><div><i class="icon-printer"></i><h4>Printing</h4></div></div>
  </div><!-- /.quicklinks -->

  <div class="row row-wireframe row-2">

    <div class="col-sm-8 announcements">
      <h3>Announcements</h3>
      <div class="padding-base-horizontal">

    <?php if ($page['home_news']): ?>
      <?php print render($page['home_news']); ?>
    <?php endif; ?>

    <!--
        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>
        
        -->
      </div>
    </div><!-- /.announcements -->

    <div class="col-sm-4 resources">
      <h3>Resources</h3>
      <div><h4>Students</h4></div>
      <div><h4>Faculty & Staff</h4></div>
      <div><h4>Resources</h4></div>
    </div>

  </div>
</div><!-- /#main-container -->
<div id="push"></div>
</div><!-- /#wrap -->
<?php print render($page['footer']); ?>
