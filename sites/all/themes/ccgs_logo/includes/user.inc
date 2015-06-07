<?php
/**
 * @file
 * Theme and preprocess functions for users.
 */
function ccgs_logo_preprocess_user_login(&$vars) {
  unset($vars['form']['twitter_signin']);
  // debug(array_keys($vars['form']));
  unset($vars['form']['name']['#description']);
  unset($vars['form']['pass']['#description']);
}

function ccgs_logo_preprocess_user_register_form(&$vars) {
  // debug(array_keys($vars['form']['account']));
  // debug($vars['form']['account']['name']);
  unset($vars['form']['account']['mail']['#description']);
}

function ccgs_logo_form_user_register_form_alter(&$form, &$form_state, $form_id) {

  $languages = language_list();
  $names = array();
  foreach ($languages as $key => $language) {
    $names[$key] = t($language->name);
  }
  global $language;

  $form['account']['locale']['language'] = array(
    // '#type' => (count($names) <= 5 ? 'radios' : 'select'),
    '#type' => 'hidden',
    '#title' => t('Language'),
    '#default_value' => $language->language,
    '#options' => $names,
    '#description' => t("Prefered language for you account."),
  );
  
  // Use exactly the same access logic as the original,
  // without checking for the 'administer users' permission
  $form['account']['locale']['#access'] = ($form['#user_category'] == 'account' || ($form['#user_category'] == 'register'));
}