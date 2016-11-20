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
<div class="contact-page">
  <div class="map">
    <div class="map-canvas" id="map-canvas-contact" data-lat="<?php print (theme_get_setting('map_latitude')); ?>" data-lng="<?php print (theme_get_setting('map_longitude')); ?>" data-zoom="12"></div>
  </div>
<div class="contact-text-block">
  <div class="col-md-12">
   <div class="contact-adress">
     <div class="subtitle">
        <?php if (theme_get_setting('cocoon_contact_page_title')): ?>
          <h2><?php print (theme_get_setting('cocoon_contact_page_title')); ?></h2>
        <?php endif; ?>
      </div>
      <?php if (theme_get_setting('cocoon_contact_page_body')): ?>
        <p><?php print (theme_get_setting('cocoon_contact_page_body')); ?></p>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="adress-block">
            <span class="icon-envelope"></span>
            <?php if (theme_get_setting('cocoon_contact_page_email_title')): ?>
              <h4><?php print (theme_get_setting('cocoon_contact_page_email_title')); ?></h4>
            <?php endif; ?>
            <?php if (theme_get_setting('cocoon_contact_page_email_address')): ?>
              <a href="mailto:<?php print (theme_get_setting('cocoon_contact_page_email_address')); ?>"><?php print (theme_get_setting('cocoon_contact_page_email_address')); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="adress-block">
            <span class="icon-phone"></span>
            <?php if (theme_get_setting('cocoon_contact_page_phone_title')): ?>
              <h4><?php print (theme_get_setting('cocoon_contact_page_phone_title')); ?></h4>
            <?php endif; ?>
            <?php if (theme_get_setting('cocoon_contact_page_phone_number')): ?>
              <a href="tel:<?php print (theme_get_setting('cocoon_contact_page_phone_number')); ?>"><?php print (theme_get_setting('cocoon_contact_page_phone_number')); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="adress-block">
            <span class="icon-map"></span>
            <?php if (theme_get_setting('cocoon_contact_page_address_title')): ?>
              <h4><?php print (theme_get_setting('cocoon_contact_page_address_title')); ?></h4>
            <?php endif; ?>
            <ul>
            <?php if (theme_get_setting('cocoon_contact_page_address_full')): ?>
              <li><?php print (theme_get_setting('cocoon_contact_page_address_full')); ?></li>
            <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <?php if ($messages): ?>
          <div class="container">
             <?php if ($messages): ?>
               <div id="messages">
                 <?php print $messages; ?>
               </div><!-- /#messages -->
             <?php endif; ?>
           </div>
         <?php endif; ?>
          <div class="subtitle">
            <?php if (theme_get_setting('cocoon_contact_page_form_title')): ?>
              <h2><?php print (theme_get_setting('cocoon_contact_page_form_title')); ?></h2>
            <?php endif; ?>
            <span class="title-separator"></span>
          </div>
          <?php print render($page['content']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
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