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

if (ccgs_check_if_no_header()) {
  require(__DIR__ . '/header_' . $language->language . '.html');
}
?>

<div id="content" class="container">

  <?php if ($messages): ?>
  <div id="messages">
    <?php print $messages; ?>
  </div>
  <?php endif; ?>
  
  <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
    <?php print render($page['content']); ?>
  </div>
</div>

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>