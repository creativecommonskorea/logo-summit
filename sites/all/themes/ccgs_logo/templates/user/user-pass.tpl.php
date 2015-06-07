<?php global $language; ?>

<div class="user-block">
	<h1><?php echo t('Reset password'); ?></h1>
	<?php print drupal_render_children($form); ?>	
</div>

<ul>
	<li><?php echo l(t('Create new account'), 'user/register', array('attributes' => array('class' => 'login-register', 'title' => t('Create a new user account')))); ?></li>
</ul>
