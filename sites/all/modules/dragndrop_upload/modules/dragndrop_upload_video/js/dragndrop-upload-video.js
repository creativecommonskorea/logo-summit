/**
 * @file
 * Contains a behavior-function to initialize dragndrop_upload_video widget.
 */

(function ($) {
  Drupal.behaviors.dragndropUploadVideo = {
    attach: function (context, settings) {
      if (!settings.dragndropUploadVideo || ($.browser.msie && $.browser.version <= 10) || $('html').hasClass('not-supported-dnd')) {
        return;
      }

      $.each(settings.dragndropUploadVideo, function (i, selector) {
        $(selector, context).once('dnd-upload-video', function () {
          new DnDUploadVideo($(this));
        });
      });
    }
  }
})(jQuery);
