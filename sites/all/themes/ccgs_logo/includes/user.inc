<?php
/**
 * @file
 * Theme and preprocess functions for users.
 */
function ccgs_logo_preprocess_user_login(&$vars) {
  unset($vars['form']['twitter_signin']);
}