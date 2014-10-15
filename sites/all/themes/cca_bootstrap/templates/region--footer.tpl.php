<?php if ($content): ?>
  <footer<?php print $attributes; ?>>
    <?php if ($content_attributes): ?><div<?php print $content_attributes; ?>><?php endif; ?>
    <?php //print $content; ?>
    <div class="row footer-tabs">
      <div class="col-xs-12">
      <ul>
        <li><a href="http://moodle.cca.edu/">Moodle</a></li>
        <li><a href="http://webadvisor.cca.edu/">WebAdvisor</a></li>
        <li><a href="http://google.cca.edu/">Google Apps</a></li>
        <li><a href="https://vault.cca.edu/">Vault</a></li>
        <li><a href="http://libraries.cca.edu/">Libraries</a></li>
        <li><a href="https://proxy.cca.edu/login?url=http://www.lynda.com/">Lynda</a></li>
        <li><a href="https://print.cca.edu:9192/app;jsessionid=1eiu3gekbh7bm?service=external/Home&sp=Suser">Papercut</a></li>
        <!--<li><a>Workday</a></li>-->
      </ul>
      </div>
    </div>
    <hr>
    <ul class="list-unstyled">
      <li class="pull-right">
        your IP address is <?php echo $_SERVER["REMOTE_ADDR"]; ?>
      </li>
      <li>
        <!-- cca logo -->
        <a href="https://www.cca.edu"><i class="icon-c-logo"></i><i class="icon-c-logo"></i><i class="icon-a-logo"></i></a>
      </li>
      <li>
      </li>
    </ul>
    <?php if ($content_attributes): ?></div><?php endif; ?>
  </footer>
<?php endif; ?>