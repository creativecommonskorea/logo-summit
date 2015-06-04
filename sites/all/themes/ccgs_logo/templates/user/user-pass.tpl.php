<?php global $language; ?>
<div class="container">
	<div class="row">
		<p><a href="/<?php echo $language->language; ?>"><img alt="" class="img-responsive img-centered" src="/sites/all/themes/ccgs_logo/assets/images/logo-icon.png" /></a></p>
		<div class="col-md-4 col-md-offset-4 well">
			<h1><?php echo t('Reset password'); ?></h1>
			<?php print drupal_render_children($form); ?>	
		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4 clearfix">
	  		<ul>
				<li><?php echo l(t('Register a new account'), 'user/register', array('attributes' => array('class' => 'login-register', 'title' => t('Create a new user account')))); ?></li>
			</ul>
		</div>
  	</div>
</div>