<?php
/**
 * @file
 * Theme and preprocess functions for users.
 */
function ccgs_logo_preprocess_user_login(&$vars) {

  unset($vars['form']['twitter_signin']);

  $social_signin = array(
  	'social_signin' => array(
  		'#markup' => '<div class="social-signin"><a href="/user/simple-fb-connect" class="btn btn-lg btn-primary pull-right">페이스북 로그인</a><a href="/twitter/redirect" class="btn btn-lg btn-primary">트위터 로그인</a></div>'
  	)
  );
  $vars['form'] = $social_signin + $vars['form'];
}

function ccgs_logo_preprocess_user_register_form(&$vars) {
  
}

function ccgs_logo_preprocess_user_pass(&$vars) {
  
}

/*
array (
  '#markup' => '<div class="item-list"><ul><li class="first last"><a href="/twitter/redirect"><img typeof="foaf:Image" src="http://f15bedb5.ngrok.io/sites/all/modules/twitter/twitter_signin/images/Sign-in-with-Twitter-lighter-small.png" alt="Sign in with Twitter" /></a></li>
</ul></div>',
  '#tree' => false,
  '#parents' => 
  array (
    0 => 'twitter_signin',
  ),
  '#array_parents' => 
  array (
    0 => 'twitter_signin',
  ),
  '#weight' => 0.0050000000000000001,
  '#processed' => false,
  '#required' => false,
  '#attributes' => 
  array (
  ),
  '#title_display' => 'before',
  '#id' => 'edit-twitter-signin',
  '#sorted' => true,
)
*/