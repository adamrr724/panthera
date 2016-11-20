<div class="com-block">
  <div class="com-img">
    <?php print $picture; ?>
  </div>

  <div class="com-txt">
    <?php print render($title_prefix); ?>
    <h5><?php print $author; ?></h5>
    <?php print render($title_suffix); ?>
    <span><?php print $created; ?></span>

    <p>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['links']);
        print render($content);
      ?>
      <?php if ($signature): ?>
      <footer class="user-signature clearfix">
        <?php print $signature; ?>
      </footer>
      <?php endif; ?>
    </p> <!-- /.content -->
    <div class="pull-right"><?php print render($content['links']); ?></div>
  </div>
</div>
