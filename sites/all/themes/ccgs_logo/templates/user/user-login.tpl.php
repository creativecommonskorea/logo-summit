<?php global $language; ?>
<div class="container">
	<div class="row">
		<p><a href="/<?php echo $language->language; ?>"><img alt="" class="img-responsive img-centered" src="/sites/all/themes/ccgs_logo/assets/images/logo-icon.png" /></a></p>
		<div class="col-md-4 col-md-offset-4 well clearfix">
			<div class="social-signin">
				<a href="/<?php echo $language->language; ?>/user/simple-fb-connect" class="btn btn-primary pull-right"><i class="fa fa-facebook"></i>&nbsp;&nbsp;<?php echo t('Facebook connect'); ?></a>
				<a href="/<?php echo $language->language; ?>/twitter/redirect" class="btn btn-primary"><i class="fa fa-twitter"></i>&nbsp;&nbsp;<?php echo t('Sign in with Twitter'); ?></a>
			</div>
			<?php print drupal_render_children($form) ?>	
		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4 clearfix">
	  		<ul>
				<li><?php echo l(t('Register a new account'), 'user/register', array('attributes' => array('class' => 'login-register', 'title' => t('Create a new user account')))); ?></li>
				<li><?php echo l(t('Forgot password?'), 'user/password', array('attributes' => array('class' => 'login-password', 'title' => t('Get a new password')))); ?></li>
			</ul>
		</div>
  	</div>
</div>