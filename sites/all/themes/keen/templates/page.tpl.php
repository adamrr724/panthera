<?php
  $base_path = base_path();
  $path_to_theme = drupal_get_path('theme', 'keen');
?>
<header>
  <div class="logo">
    <a href="<?php print $front_page; ?>" class="animsition-link">
      <img src="<?php print $logo; ?>" alt="logo">
    </a>
  </div>
  <?php if ($page['main_menu']): ?>
  <div class="mobile-icon">
    <div class="nav-menu-icon">
      <a href="#"><i></i></a>
    </div> 
    </div>
  <nav>
    <div class="navigation">
      <?php print render($page['main_menu']); ?>
    </div> 
  </nav>  
  <?php endif; ?>
</header>

<div id="ccn_dConsole">
  <div class="container">
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div><!-- /#messages -->
      <?php endif; ?>
      <?php if ($tabs_rendered = render($tabs)): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
    <?php if ($feed_icons): ?>
      <div class="container">
        <?php print $feed_icons; ?>
      </div>
    <?php endif; ?>
  </div>
</div><!-- /#ccn_dConsole -->

<?php print render($page['content']); ?>

<footer>
  <div class="copyright">
    <div class="footer-folow">
      <?php if (theme_get_setting('cocoon_footer_fb')): ?>
        <a href="<?php print (theme_get_setting('cocoon_footer_fb')); ?>" target="_blank"><span class="fa fa-facebook"></span></a>
      <?php endif; ?>
      <?php if (theme_get_setting('cocoon_footer_twitter')): ?>
        <a href="<?php print (theme_get_setting('cocoon_footer_twitter')); ?>" target="_blank"><span class="fa fa-twitter"></span></a>
      <?php endif; ?>
      <?php if (theme_get_setting('cocoon_footer_pin')): ?>
        <a href="<?php print (theme_get_setting('cocoon_footer_pin')); ?>" target="_blank"><span class="fa fa-pinterest"></span></a>
      <?php endif; ?>
      <?php if (theme_get_setting('cocoon_footer_dribbble')): ?>
        <a href="<?php print (theme_get_setting('cocoon_footer_dribbble')); ?>" target="_blank"><span class="fa fa-dribbble"></span></a>
      <?php endif; ?>
      <?php if (theme_get_setting('cocoon_footer_gplus')): ?>
        <a href="<?php print (theme_get_setting('cocoon_footer_gplus')); ?>" target="_blank"><span class="fa fa-google-plus"></span></a>
      <?php endif; ?>
    </div>
    <?php if (theme_get_setting('cocoon_footer_text')): ?>
      <span><?php print (theme_get_setting('cocoon_footer_text')); ?></span>
    <?php endif; ?>
  </div>
</footer>
