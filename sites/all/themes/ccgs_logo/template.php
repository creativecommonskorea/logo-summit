<?php
/**
 * @file
 * Theme functions
 */

require_once dirname(__FILE__) . '/includes/structure.inc';
require_once dirname(__FILE__) . '/includes/comment.inc';
require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/menu.inc';
require_once dirname(__FILE__) . '/includes/node.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';
require_once dirname(__FILE__) . '/includes/user.inc';
require_once dirname(__FILE__) . '/includes/view.inc';

/**
 * Implements hook_css_alter().
 */
function ccgs_logo_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included 
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

/**
 * Implements template_preprocess_page().
 */
function ccgs_logo_preprocess_page(&$variables) {
  // Add copyright to theme.
  if ($copyright = theme_get_setting('copyright')) {
    $variables['copyright'] = check_markup($copyright['value'], $copyright['format']);
  }
  if (drupal_is_front_page()) {
    unset($variables['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
    drupal_set_title(''); //removes welcome message (page title)
  }
}

/**
 * Registers overrides for various functions.
 *
 * In this case, overrides three user functions
 */
function ccgs_logo_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ccgs_logo') . '/templates/user',
    'template' => 'user-login',
    'preprocess functions' => array(
       'ccgs_logo_preprocess_user_login'
    ),
  );
  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ccgs_logo') . '/templates/user',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'ccgs_logo_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'ccgs_logo') . '/templates/user',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'ccgs_logo_preprocess_user_pass'
    ),
  );
  return $items;
}

/**
 * Add cancel button to logo edit form.
 */
function ccgs_logo_form_logo_node_form_alter(&$form, &$form_state, $form_id) {
  $destination = (!isset($node->nid) || isset($node->is_new)) ? '/' : "node/{$node->nid}";

  $form['actions']['cancel'] = array(
    '#markup' => l(t('Cancel'), $destination,  array('attributes' => array('class' => array('btn', 'btn-default')))),
    '#weight' => 10,
  );

  $form['actions']['delete']['#attributes'] = array(
    'class' => array('btn', 'btn-danger', 'pull-right')
  );
}

/**
 * Check if current path need header or not.
 */
function ccgs_check_if_no_header() {
  global $language;
  $no_header_pathes = array(
    'user', 'user/login', 'user/register', 'user/password', 'user/reset'
  );
  // debug('lang');
  // debug(!empty($language->language));
  // debug('admin');
  // debug(!path_is_admin(current_path()));
  // debug('lang');
  // debug(!in_array(current_path(), $no_header_pathes));

  return !empty($language->language) && !in_array(current_path(), $no_header_pathes);
}

function ccgs_check_if_admin() {
  $no_header_pathes = array(
    'node/add/logo'
  );
  return path_is_admin(current_path()) && !in_array(current_path(), $no_header_pathes);
}


function ccgs_logo_preprocess_html(&$variables) {
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css', array(
    'type' => 'external'
  ));
}

function is_korean() {
  global $language;
  return !empty($language->language) && ($language->language == 'ko');
}

function ccgs_logo_preprocess_field(&$variables, $hook) {
  if (
    isset($variables['element']['#items'][0]) && (
      !isset($variables['element']['#items'][0]['format']) ||
      $variables['element']['#items'][0]['format'] === 'text_plain'
    )
  ) {
    foreach ($variables['items'] as $index => $value) {
      $markup = isset($variables['items'][$index]['#markup']) ? $variables['items'][$index]['#markup'] : '';
      $variables['items'][$index]['#markup'] = nl2br($markup);
    }
  }
}