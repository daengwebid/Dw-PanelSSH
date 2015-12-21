/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppForum = App.extend({
        run: function(next) {
            next();
        }
    });
})(document, window, jQuery);