<?php global $language; ?>

<div class="clearfix">
	<h1><?php echo t('Create new account'); ?></h1>
	<div class="social-signin">
		<a href="/<?php echo $language->language; ?>/user/simple-fb-connect" class="btn btn-primary pull-right"><i class="fa fa-facebook"></i>&nbsp;&nbsp;<?php echo t('Facebook connect'); ?></a>
		<a href="/<?php echo $language->language; ?>/twitter/redirect" class="btn btn-primary"><i class="fa fa-twitter"></i>&nbsp;&nbsp;<?php echo t('Sign in with Twitter'); ?></a>
	</div>
	<?php print drupal_render_children($form) ?>	
</div>
  	
<ul>
	<li><?php echo l(t('Request new password'), 'user/password', array('attributes' => array('class' => 'login-password', 'title' => t('Get a new password')))); ?></li>
</ul>
