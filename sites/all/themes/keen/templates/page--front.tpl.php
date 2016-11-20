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
<?php print render($page['content']); ?>
