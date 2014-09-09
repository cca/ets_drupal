<?php if ($content): ?>
  <footer<?php print $attributes; ?>>
    <?php if ($content_attributes): ?><div<?php print $content_attributes; ?>><?php endif; ?>
    <?php //print $content; ?>
    <div class="row footer-tabs">
      <div class="col-xs-12">
      <ul>
        <li><a>Moodle</a></li>
        <li><a>WebAdvisor</a></li>
        <li><a>Google Apps</a></li>
        <li><a>Vault</a></li>
        <li><a>Libraries</a></li>
        <li><a>Workday</a></li>
        <li><a>Lynda</a></li>
        <li><a>Papercut</a></li>
      </ul>
      </div>
    </div>
    <hr>
    <ul class="list-unstyled">
      <li class="pull-right">
        your IP address is <?php echo $_SERVER["REMOTE_ADDR"]; ?>
      </li>
      <li>
        cca.edu
      </li>
      <li>
      </li>
    </ul>
    <?php if ($content_attributes): ?></div><?php endif; ?>
  </footer>
<?php endif; ?>