/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
  'use strict';

  window.AppMailbox = App.extend({
    handleAction: function() {
      $(document).on('change', '.multi-select', function() {
        var $checked = $('.multi-select input:checked'),
          length = $checked.length;

        if (length > 0) {
          $('.site-action').addClass('site-action-toggle');
        } else {
          $('.site-action').removeClass('site-action-toggle');
        }
      });

      $('.site-action').on('click', function(e) {
        var $this = $(this);

        if ($this.hasClass('site-action-toggle')) {

          $('.select-all input').prop('checked', false).trigger('change');

          $this.removeClass('site-action-toggle');
          e.stopPropagation();
        } else {
          $('#addMailForm').modal('show');
        }
      });
    },
    run: function(next) {
      this.handleAction();

      $('#addMailForm').modal({
        show: false
      });
      $('.checkbox').on('click', function(e) {
        e.stopPropagation();
      });
      $('.checkbox-important').on('click', function(e) {
        e.stopPropagation();
      });
      this.handleMultiSelect();
      next();
    }
  });
})(document, window, jQuery);
