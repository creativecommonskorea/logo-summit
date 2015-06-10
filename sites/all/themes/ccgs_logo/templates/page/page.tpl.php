<?php if ($messages): ?>
  <div id="messages">
    <?php print $messages; ?>
  </div>
<?php endif; ?>

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
if (ccgs_need_header()) {
  require(__DIR__ . '/header_' . $language->language . '.html');
}

?>

<div id="content" class="container">

  <div class="col-lg-10 col-lg-offset-1">

    <?php if (check_need_tabs()): ?>
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
</div>

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <p>&nbsp;</p>
        <p style="margin-left: 1em; margin-top: 0.5em; display: inline-block">
        <?php if ($language->language == 'en'): ?>
          This web site is operated by <a href="https://creativecommons.org">Creative Commons</a> and <a href="http://cckorea.org">Creative Commons Korea</a> creative@cckorea.org
        <?php else: ?>
          이 사이트는 <a href="https://creativecommons.org">크리에이티브 커먼즈</a>와 <a href="http://cckorea.org">크리에이티브커먼즈 코리아</a>에서 운영합니다. creative@cckorea.org / 070-7618-0321
        <?php endif; ?>
        </p>
      </div>
    </div>

  </div>
</footer>