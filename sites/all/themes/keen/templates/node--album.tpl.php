<?php
  $base_path = base_path();
  $path_to_theme = drupal_get_path('theme', 'keen');
?>
<div id="node-<?php print $node->nid; ?>" class="allbum">
  <div class="izotope-container gallery <?php print render($content['field_album_display']); ?>">
    <div class="grid-sizer"></div>
    <div class="item stamp first-block">      
      <img src="<?php print $base_path . $path_to_theme; ?>/images/work_5_1.jpg" alt="title"/>
      <div class="gallery-title">
        <h2><?php print $title; ?></h2>
        <p><?php print render($content['body']); ?></p>
        <a href="<?php print (theme_get_setting('cocoon_albums_page_url')); ?>" class="animsition-link"><img src="<?php print $base_path . $path_to_theme; ?>/images/arrow.png" alt=""><?php if (theme_get_setting('cocoon_albums_page_title')): ?><?php print (theme_get_setting('cocoon_albums_page_title')); ?><?php else: ?>Back to albums<?php endif; ?></a>
      </div>
    </div>
    <div class="my-simple-gallery" itemscope itemtype="http://schema.org/ImageGallery">					    
      <?php print render($content['field_images']); ?>
    </div>
  </div>	   
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="pswp__bg"></div>
				<div class="pswp__scroll-wrap">
					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>
					<div class="pswp__ui pswp__ui--hidden">
						<div class="pswp__top-bar">
							<div class="pswp__counter"></div>
							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
							<button class="pswp__button pswp__button--share" title="Share"></button>
							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
								  <div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								  </div>
								</div>
							</div>
						</div>
						<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div> 
						</div>
						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
						</button>
						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
						</button>
						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
		   </div>
<div class="clear"></div>


  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
