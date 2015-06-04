<?php

/**
 * @file
 * Administration page callbacks for the simple fb connect module.
 */
function simple_fb_connect_api_keys_settings($form, &$form_state) {
  // Check that Facebook PHP SDK is properly installed and that the version is 4.0.x
  $sdk = libraries_detect('facebook-php-sdk-v4');
  if (!is_array($sdk) || !$sdk['installed'] || $sdk['version'] < '4.0' || $sdk['version'] >= '4.1') {
    drupal_set_message(t('Facebook PHP SDK not poperly installed. Check README.txt and Drupal status report!'), 'error');
  }

  // show instructions to README.txt
  drupal_set_message(t('Installation and configuration instructions can be found from the README.txt'));

  $form['fb_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Facebook App settings'),
    '#description' => t('You need to first create a Facebook App at <a href="https://developers.facebook.com/apps">https://developers.facebook.com/apps</a>')
  );

  $form['fb_settings']['simple_fb_connect_appid'] = array(
    '#type' => 'textfield',
    '#required' => TRUE,
    '#title' => t('App ID'),
    '#default_value' => variable_get('simple_fb_connect_appid', NULL),
    '#description' => t('Copy the App ID of your Facebook App here'),
  );

  $form['fb_settings']['simple_fb_connect_skey'] = array(
    '#type' => 'textfield',
    '#required' => TRUE,
    '#title' => t('App Secret'),
    '#default_value' => variable_get('simple_fb_connect_skey', NULL),
    '#description' => t('Copy the App Secret of your Facebook App here'),
  );

  $form['fb_settings']['simple_fb_connect_connect_url'] = array(
    '#type' => 'textfield',
    '#attributes' => array('readonly' => 'readonly'),
    '#title' => t('Connect url'),
    '#description' => t('Copy this value to <em>Site URL</em> and <em>Mobile Site URL</em> of your Facebook App settings.'),
    '#default_value' => $GLOBALS['base_url'],
  );

  $form['module_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Simple FB Connect configurations'),
    '#description' => t('These settings allow you to configure how Simple FB Connect module behaves on your Drupal site')
  );

  $form['module_settings']['simple_fb_connect_post_login_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Post login path'),
    '#description' => t('Drupal path (without trailing slash) where the user should be redirected after successful login. Use <em>&lt;front&gt;</em> to redirect user to your front page. You can override this with ?destination URL parameter. Refer to README.txt for more information.'),
    '#default_value' => variable_get('simple_fb_connect_post_login_url', 'user'),
  );

  $form['module_settings']['simple_fb_connect_login_only'] = array(
    '#type' => 'checkbox',
    '#title' => t('Login Only (No Registration)'),
    '#description' => t('Allow only existing users to login with FB. New users can not signup using FB Connect.'),
    '#default_value' => variable_get('simple_fb_connect_login_only', 0),
  );

  return system_settings_form($form);
}
