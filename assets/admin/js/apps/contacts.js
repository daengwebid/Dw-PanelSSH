/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
  'use strict';

  window.AppContacts = App.extend({
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
          $('#addUserForm').modal('show');
        }
      });
    },

    run: function(next) {
      this.handleMultiSelect();
      this.handleAction();

      $('#addUserForm').modal({
        show: false
      });

      $('.checkbox').on('click', function(e) {
        e.stopPropagation();
      });

      var $hideAll = $('.contacts-select-all-responsive');


      $hideAll.on('change', function() {
        var checked = $(this).find('input').prop('checked');

        $('.multi-select input').each(function() {
          $(this).prop('checked', checked).trigger('change', [true]);
        });

      });


      $(document).on('change', '.multi-select', function(e, isSelectAll) {
        if (isSelectAll) return;

        var $select = $('.multi-select'),
          total = $select.length,
          checked = $select.find('input:checked').length;
        if (total === checked) {
          $hideAll.find('input').prop('checked', true);
        } else {
          $hideAll.find('input').prop('checked', false);
        }

      });


      next();
    }
  });
})(document, window, jQuery);
