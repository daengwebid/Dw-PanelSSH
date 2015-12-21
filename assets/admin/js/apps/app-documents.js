/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppDocuments = App.extend({
        affixHandle: function() {
            $("#articleAffix").affix({
                offset: {
                    top: 210
                }
            });
        },
        scrollHandle: function() {
            $("body").scrollspy({
                target: "#articleAffix"
            });
        },
        run: function(next) {
            this.scrollHandle();
            this.affixHandle();
            next();
        }
    });
})(document, window, jQuery);