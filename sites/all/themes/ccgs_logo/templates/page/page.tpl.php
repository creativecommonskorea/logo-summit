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
    <a rel="license" class="pull-left media" href="http://creativecommons.org/licenses/by/2.0/kr/">
      <img alt="크리에이티브 커먼즈 라이선스" style="border-width:0" src="http://i.creativecommons.org/l/by/2.0/kr/88x31.png">
    </a>
    <p style="margin-left: 1em; margin-top: 0.5em; display: inline-block">CCKOREA에 의해 작성된 CCKOREA 웹사이트는 크리에이티브 커먼즈 저작자표시 2.0 대한민국 라이선스에 따라 이용할 수 있습니다.</p>
    <!--
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <?php if (ccgs_check_if_no_header()): ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
    <?php endif; ?>
    -->
  </div>
</footer>