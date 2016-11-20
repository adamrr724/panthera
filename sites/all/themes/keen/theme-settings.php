<?php
function keen_form_system_theme_settings_alter(&$form, &$form_state) {
  // Cocoon Options
  $form['cocoon_options'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Cocoon Theme Options'),
      '#weight' => 0,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
  // Cocoon Theme Skin Panel
  $form['cocoon_options']['cocoon_skin'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Theme Skin'), 
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Theme Skin Panel: Custom CSS
  $form['cocoon_options']['cocoon_skin']['custom_css'] = array(
    '#type' => 'textarea', 
    '#title' => t('Custom CSS'), 
    '#description' => t('Specify custom CSS tags and styling to apply to the theme. You can also override default styles here.'),
    '#rows' => '5',
    '#default_value' => theme_get_setting('custom_css'),
  );
  // Cocoon Album Page
  $form['cocoon_options']['cocoon_album_page'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Album Page'), 
    '#description' => t('Change settings for the Album Page.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Album Page: Back to albums title
  $form['cocoon_options']['cocoon_album_page']['cocoon_albums_page_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Back to Albums link text'),
    '#default_value' => theme_get_setting('cocoon_albums_page_title'),
    '#description'   => t("Link text for the Back to Albums link."),
  );
  // Cocoon Album Page: Back to albums URL
  $form['cocoon_options']['cocoon_album_page']['cocoon_albums_page_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Back to Albums link URL'),
    '#default_value' => theme_get_setting('cocoon_albums_page_url'),
    '#description'   => t("URL for the Back to Albums link."),
  );
  // Cocoon About Page
  $form['cocoon_options']['cocoon_about_page'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon About Page'), 
    '#description' => t('Change settings for the About Page.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon About Page: Background Image
  $form['cocoon_options']['cocoon_about_page']['cocoon_about_page_bg_img'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Background Image'),
    '#description'   => t('Upload a background image here. Recommended size is 1920 x 1200px.'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('cocoon_about_page_bg_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  // Cocoon About Page: Title
  $form['cocoon_options']['cocoon_about_page']['cocoon_about_page_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('About Page title'),
    '#default_value' => theme_get_setting('cocoon_about_page_title'),
    '#description'   => t("About Page title."),
  );
  // Cocoon About Page: Body
  $form['cocoon_options']['cocoon_about_page']['cocoon_abaout_page_body'] = array(
    '#type'          => 'textarea',
    '#title'         => t('About Page body'),
    '#rows' => '5',
    '#default_value' => theme_get_setting('cocoon_about_page_body'),
    '#description'   => t("About Page body text."),
  );
  // Cocoon About Page: Link text
  $form['cocoon_options']['cocoon_about_page']['cocoon_about_page_link_text'] = array(
    '#type'          => 'textfield',
    '#title'         => t('About Page link text'),
    '#default_value' => theme_get_setting('cocoon_about_page_link_text'),
    '#description'   => t("About Page link text."),
  );
  // Cocoon About Page: Link URL
  $form['cocoon_options']['cocoon_about_page']['cocoon_about_page_link_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('About Page link URL'),
    '#default_value' => theme_get_setting('cocoon_about_page_link_url'),
    '#description'   => t("About Page link URL."),
  );
  // Cocoon Contact Page
  $form['cocoon_options']['cocoon_contact_page'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Contact Page'), 
    '#description' => t('Change settings for the Contact Page.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Contact Page: Title
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page title'),
    '#default_value' => theme_get_setting('cocoon_contact_page_title'),
    '#description'   => t("Contact Page title."),
  );
  // Cocoon Contact Page: Body
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_body'] = array(
    '#type'          => 'textarea',
    '#title'         => t('Contact Page body'),
    '#rows' => '5',
    '#default_value' => theme_get_setting('cocoon_contact_page_body'),
    '#description'   => t("Contact Page body text."),
  );
  // Cocoon Contact Page: Email Title
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_email_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Email Title'),
    '#default_value' => theme_get_setting('cocoon_contact_page_email_title'),
    '#description'   => t("Title for the email address."),
  );
  // Cocoon Contact Page: Email Address
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_email_address'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Email Address'),
    '#default_value' => theme_get_setting('cocoon_contact_page_email_address'),
    '#description'   => t("Your email address."),
  );
  // Cocoon Contact Page: Phone Title
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_phone_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Phone Title'),
    '#default_value' => theme_get_setting('cocoon_contact_page_phone_title'),
    '#description'   => t("Title for the phone number."),
  );
  // Cocoon Contact Page: Phone Number
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_phone_number'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Phone Number'),
    '#default_value' => theme_get_setting('cocoon_contact_page_phone_number'),
    '#description'   => t("Your phone number."),
  );
  // Cocoon Contact Page: Address Title
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_address_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Address Title'),
    '#default_value' => theme_get_setting('cocoon_contact_page_address_title'),
    '#description'   => t("Title for the address."),
  );
  // Cocoon Contact Page: Address Full
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_address_full'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Address'),
    '#default_value' => theme_get_setting('cocoon_contact_page_address_full'),
    '#description'   => t("Your mailing address."),
  );
  // Cocoon Contact Page: Form Title
  $form['cocoon_options']['cocoon_contact_page']['cocoon_contact_page_form_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Contact Page Form title'),
    '#default_value' => theme_get_setting('cocoon_contact_page_form_title'),
    '#description'   => t("Title above the contact form."),
  );
  // Cocoon Footer Settings
  $form['cocoon_options']['cocoon_footer'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Footer Settings'), 
    '#description' => t('Change the Footer settings.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Footer Settings: Copyright Text
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_text'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Copyright Text'),
    '#default_value' => theme_get_setting('cocoon_footer_text'),
    '#description'   => t("Text for the copyright notice in footer."),
  );
  // Cocoon Footer Settings: Facebook URL
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_fb'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook URL'),
    '#default_value' => theme_get_setting('cocoon_footer_fb'),
    '#description'   => t("URL to Facebook profile. Leave blank for none."),
  );
  // Cocoon Footer Settings: Twitter URL
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter URL'),
    '#default_value' => theme_get_setting('cocoon_footer_twitter'),
    '#description'   => t("URL to Twitter profile. Leave blank for none."),
  );
  // Cocoon Footer Settings: Pinterest URL
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_pin'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Pinterest URL'),
    '#default_value' => theme_get_setting('cocoon_footer_pin'),
    '#description'   => t("URL to Pinterest profile. Leave blank for none."),
  );
  // Cocoon Footer Settings: Dribbble URL
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_dribbble'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Dribbble URL'),
    '#default_value' => theme_get_setting('cocoon_footer_dribbble'),
    '#description'   => t("URL to Dribbble profile. Leave blank for none."),
  );
  // Cocoon Footer Settings: Google Plus URL
  $form['cocoon_options']['cocoon_footer']['cocoon_footer_gplus'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Google Plus URL'),
    '#default_value' => theme_get_setting('cocoon_footer_gplus'),
    '#description'   => t("URL to Google Plus profile. Leave blank for none."),
  );
  // Cocoon Map Settings
  $form['cocoon_options']['cocoon_map_settings'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Cocoon Map Settings'), 
    '#description' => t('Change map settings.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  // Cocoon Map Settings: Latitude
  $form['cocoon_options']['cocoon_map_settings']['map_latitude'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Map Latitude'),
    '#default_value' => theme_get_setting('map_latitude'),
    '#description'   => t("Latitude for the map address."),
  );
  // Cocoon Map Settings: Longitude
  $form['cocoon_options']['cocoon_map_settings']['map_longitude'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Map Longitude'),
    '#default_value' => theme_get_setting('map_longitude'),
    '#description'   => t("Longitude for the map address."),
  );
  // Cocoon Map Settings: Marker Image
  $form['cocoon_options']['cocoon_map_settings']['map_marker_img'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Map marker image'),
    '#description'   => t('Upload an image for the map marker.'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('map_marker_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );

  $form['#submit'][] = 'keen_settings_form_submit';

  // Get all themes.
  $themes = list_themes();

  // Get the current theme
  $active_theme = $GLOBALS['theme_key'];
  $form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';

}

function keen_settings_form_submit(&$form, $form_state) {

  $cocoon_about_page_bg_img_image_fid = $form_state['values']['cocoon_about_page_bg_img'];
  $cocoon_about_page_bg_img_image = file_load($cocoon_about_page_bg_img_image_fid);
  if (is_object($cocoon_about_page_bg_img_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($cocoon_about_page_bg_img_image->status == 0) {
      // Update the status.
      $cocoon_about_page_bg_img_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($cocoon_about_page_bg_img_image);
      // Add a reference to prevent warnings.
      file_usage_add($cocoon_about_page_bg_img_image, 'keen', 'theme', 1);
    }
  }

  $map_marker_img_image_fid = $form_state['values']['map_marker_img'];
  $map_marker_img_image = file_load($map_marker_img_image_fid);
  if (is_object($map_marker_img_image)) {
    // Check to make sure that the file is set to be permanent.
    if ($map_marker_img_image->status == 0) {
      // Update the status.
      $map_marker_img_image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($map_marker_img_image);
      // Add a reference to prevent warnings.
      file_usage_add($map_marker_img_image, 'keen', 'theme', 1);
    }
  }

}

?>