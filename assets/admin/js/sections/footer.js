/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(window, document, $) {
  'use strict';

  $.site.footer = {
    speed: 800,

    init: function() {
      var self = this;

      this.$page = $('.page');
      this.$actions = $('.site-footer-actions');
      this.show();

      $(window).resize(function() {
        self.show();
      });

      $(document).on('click.site', '[data-toggle="scroll-top"]', function() {
        $("body, html").animate({
          scrollTop: 0
        }, self.speed);

      });
    },

    show: function() {
      if (this.$page.outerHeight() > $(window).height()) {
        this.$actions.addClass('active');
      } else {
        this.$actions.removeClass('active');
      }
    }
  };

})(window, document, jQuery);
