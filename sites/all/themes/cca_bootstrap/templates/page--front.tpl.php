<?php if ($page['navigation']): ?>
  <?php print render($page['navigation']); ?>
<?php endif; ?>

<div class="main-container container">

  <h3>Educational Technology Services</h3>

  <div class="row quicklinks">
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>CCA Acounts</h4></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>Help Desk</h4></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>Hours</h4></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>Wireless</h4></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>Printers</h4></div>
    <div class="col-xs-12 col-sm-6 col-md-4"><h4>Equipment Checkout</h4></div>
  </div><!-- /.quicklinks -->

  <div class="row row-wireframe row-2">

    <div class="col-sm-8 announcements">
      <h3>Announcements</h3>
      <div class="padding-base-horizontal">
        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>
        
        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>

        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>
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
