<?php
  $base_path = base_path();
  $path_to_theme = drupal_get_path('theme', 'keen');

  // Get Cocoon theme settings
  if (theme_get_setting('cocoon_about_page_bg_img')):
    $cocoon_about_page_bg_img_fid = theme_get_setting('cocoon_about_page_bg_img');
    $cocoon_about_page_bg_img_img = file_create_url(file_load($cocoon_about_page_bg_img_fid)->uri);
  endif;
?>
<div class="about-page"><div class="about-bg">
<div class="relative-responsive">
  <div class="bg bg-bg" style="background-image:url(<?php if (theme_get_setting('cocoon_about_page_bg_img')): ?><?php print $cocoon_about_page_bg_img_img; ?><?php else: ?><?php print $base_path . $path_to_theme; ?>/images/about.jpg<?php endif; ?>)"></div>
</div>
<div class="desc-block"><div class="about-desc">
<?php if (theme_get_setting('cocoon_about_page_title')): ?>
  <h2>
    <?php print (theme_get_setting('cocoon_about_page_title')); ?>
  </h2>
<?php endif; ?>
<?php if (theme_get_setting('cocoon_about_page_body')): ?>
    <!-- HACK HERE TO FIX THE BIO FOR THE BIO -->
  <p><?php print "Emilie Jensen is a wonderful photographer." ?></p>
<?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
      <!-- CHANGED TO ONLY HAVE ONE!! -->
    <div class="swiper-container" data-autoplay="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="2" data-lg-slides="2" data-mouse="0" data-loop="0" data-mode="horizontal" data-speed="1000" data-touch="1" id="about-slider">
      <div class="swiper-wrapper">
        <?php print $rows; ?>
      </div>
      <div class="pagination"></div>
    </div>
  <?php if (theme_get_setting('cocoon_about_page_link_text') && theme_get_setting('cocoon_about_page_link_url')): ?>
    <a href="<?php print (theme_get_setting('cocoon_about_page_link_url')); ?>" class="animsition-link"><?php print (theme_get_setting('cocoon_about_page_link_text')); ?><img src="<?php print $base_path . $path_to_theme; ?>/images/arrow.png" alt=""></a>
  <?php endif; ?>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div></div>
</div></div><?php /* class view */ ?>
