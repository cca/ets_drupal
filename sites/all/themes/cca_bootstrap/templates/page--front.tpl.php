<?php if ($page['navigation']): ?>
  <?php print render($page['navigation']); ?>
<?php endif; ?>

<div class="main-container container">

  <h3>GET STARTED</h2>

  <div class="row row-wireframe row-1">

    <div class="col-sm-4 col-wireframe"><img src="/sites/all/themes/cca_bootstrap/assets/images/quicklink.png" /></div>
    <div class="col-sm-4 col-wireframe"><img src="/sites/all/themes/cca_bootstrap/assets/images/quicklink.png" /></div>
    <div class="col-sm-4 col-wireframe"><img src="/sites/all/themes/cca_bootstrap/assets/images/quicklink.png" /></div>

  </div>

  <!--
  <div class="row">

    <div class="col-md-8"><h3>NEWS</h3></div>
    <div class="col-md-4"><h3>RESOURCES</h3></div>

  </div>
  -->

  <div class="row row-wireframe row-2">

    <div class="col-sm-8 col-wireframe">
      <h3>NEWS</h3>
      <div class="padding-base-horizontal">
        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>
        
        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>

        <h2>Lorem Ipsum Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget ullamcorper dui, a varius nisl.</p>
      </div>
    </div>
    <div class="col-sm-4 col-wireframe resources">
      <h3>RESOURCES</h3>
      <div><h4>Students</h4></div>
      <div><h4>Faculty & Staff</h4></div>
      <div><h4>Resources</h4></div>
    </div>

  </div>
</div>
<?php print render($page['footer']); ?>
