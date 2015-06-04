<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
if (ccgs_check_if_no_header() && !ccgs_check_if_admin()) {
  require(__DIR__ . '/header_' . $language->language . '.html');
}

?>

<div id="content" class="container">

  <?php if ($messages): ?>
  <div id="messages">
    <?php print $messages; ?>
  </div>
  <?php endif; ?>
  
  <?php if (path_is_admin(current_path())): ?>
  <div id="page-header">
    <?php if ($title): ?>
      <div class="page-header">
        <h1 class="title"><?php print $title; ?></h1>
      </div>
    <?php endif; ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php print render($page['content']); ?>
</div>

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <?php if (ccgs_check_if_no_header()): ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
    <?php endif; ?>
  </div>
</footer>