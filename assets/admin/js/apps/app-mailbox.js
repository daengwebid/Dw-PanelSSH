/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppMailbox = App.extend({
        handleAction: function() {
            $(document).on("change", ".multi-select", function(e) {
                var $checked = $(".multi-select input:checked"), length = $checked.length;
                if (length > 0) {
                    $(".site-action").addClass("toggle-action");
                } else {
                    $(".site-action").removeClass("toggle-action");
                }
            });
            $(".site-action").on("click", function(e) {
                var $this = $(this);
                if ($this.hasClass("toggle-action")) {
                    $(".select-all input").prop("checked", false).trigger("change");
                    $this.removeClass("toggle-action");
                    e.stopPropagation();
                } else {
                    $("#addMailForm").modal("show");
                }
            });
        },
        run: function(next) {
            this.handleAction();
            $("#addMailForm").modal({
                show: false
            });
            $(".checkbox").on("click", function(e) {
                e.stopPropagation();
            });
            $(".checkbox-important").on("click", function(e) {
                e.stopPropagation();
            });
            this.handleMultiSelect();
            next();
        }
    });
})(document, window, jQuery);