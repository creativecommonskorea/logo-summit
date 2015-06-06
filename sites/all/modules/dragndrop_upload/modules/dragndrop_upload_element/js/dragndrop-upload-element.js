/**
 * @file
 * Contains a behavior to initialize dragndrop_upload element.
 */

(function ($) {
  Drupal.behaviors.dragndropUploadElement = {
    attach: function (context, settings) {
      if (!settings.dragndropUploadElement || ($.browser.msie && $.browser.version <= 10) || $('html').hasClass('not-supported-dnd')) {
        return;
      }
      $.each(settings.dragndropUploadElement, function (selector) {
        $(selector, context).once('dnd-upload-element', function () {
          new DnDUpload($(this));
        });
      });
    }
  };
})(jQuery);
