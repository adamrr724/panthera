<?php
  $base_path = base_path();
  $path_to_theme = drupal_get_path('theme', 'keen');
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
<button class="button"<?php if ($classes_array[$id]) { print ' data-filter=".' . $classes_array[$id] .'"';  } ?>>
    <span><?php print $row; ?></span> <img src="<?php print $base_path . $path_to_theme; ?>/images/arrow.png" alt="arrow">
  </button>
<?php endforeach; ?>
