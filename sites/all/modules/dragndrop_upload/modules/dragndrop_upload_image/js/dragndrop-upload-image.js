/**
 * @file
 * Contains a behavior-function to initialize dragndrop_upload_file widget.
 */

(function ($) {
  Drupal.behaviors.dragndropUploadImage = {
    attach: function (context, settings) {
      if (!settings.dragndropUploadImage || ($.browser.msie && $.browser.version <= 10) || $('html').hasClass('not-supported-dnd')) {
        return;
      }

      $.each(settings.dragndropUploadImage, function (i, selector) {
        $(selector, context).once('dnd-upload-image', function () {
          new DnDUploadImage($(this));
        });
      });
    }
  }
})(jQuery);
