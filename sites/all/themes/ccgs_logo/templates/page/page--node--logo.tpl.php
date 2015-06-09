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
?>
<div id="main-wrapper">
  <div id="main" class="main clearfix">
    <div class="container">
      <div class="row">

        <div id="splash" class="col-lg-10 col-lg-offset-1">
          
          <div class="container">
            
            <div class="row img-block">

              <div class="links">
                <a href="http://summit.creativecommons.org<?php if (is_korean()) echo '/kr' ?>">2015 CC Global Summit</a>
              </div>

              <?php if ($language->language == "ko"): ?>
              <p><a href="/<?php echo $language->language; ?>"><img alt="" class="img-responsive img-centered" src="/sites/all/themes/ccgs_logo/assets/images/logo-icon.png" /></a></p>
              <p>&nbsp;</p>
              <hr  />
              <img id="logo-heading" class="img-centered img-responsive" src="/sites/all/themes/ccgs_logo/assets/images/logo-open.png" alt="로고를 공모합니다.">
              
              <?php else: ?>

              <p><a href="/<?php echo $language->language; ?>"><img alt="" class="img-responsive img-centered" src="/sites/all/themes/ccgs_logo/assets/images/logo-icon.png" /></a></p>
              <p>&nbsp;</p>
              <hr  />
              <h1 id="logo-heading-en" class="text-center">Logo Design Competition</h1>

              <?php endif; ?>


            </div>
            
            <div class="row">
              <?php if ($messages): ?>
              <div id="messages">
                <?php print $messages; ?>
              </div>
              <?php endif; ?>

              <?php if (check_need_tabs()): ?>
              <div id="page-header" style="padding: 1em;">
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

            </div>

            <div class="row details-box">
              <div class="details text-left clearfix">
                <div class="col-md-8 col-md-offset-2">
                  <div class="box">

                    <?php print render($page['content']); ?>

                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->
