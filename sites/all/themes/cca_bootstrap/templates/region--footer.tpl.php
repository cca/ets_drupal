<?php if ($content): ?>
  <footer<?php print $attributes; ?>>
    <?php if ($content_attributes): ?><div<?php print $content_attributes; ?>><?php endif; ?>
    <?php //print $content; ?>
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