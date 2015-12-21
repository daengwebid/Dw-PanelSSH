/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppContacts = App.extend({
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
                    $("#addUserForm").modal("show");
                }
            });
        },
        run: function(next) {
            this.handleMultiSelect();
            this.handleAction();
            $("#addUserForm").modal({
                show: false
            });
            $(".checkbox").on("click", function(e) {
                e.stopPropagation();
            });
            var $hideAll = $(".contacts-select-all-responsive");
            $hideAll.on("change", function(e) {
                var checked = $(this).find("input").prop("checked");
                $(".multi-select input").each(function() {
                    $(this).prop("checked", checked).trigger("change", [ true ]);
                });
            });
            $(document).on("change", ".multi-select", function(e, isSelectAll) {
                if (isSelectAll) return;
                var $select = $(".multi-select"), total = $select.length, checked = $select.find("input:checked").length;
                if (total === checked) {
                    $hideAll.find("input").prop("checked", true);
                } else {
                    $hideAll.find("input").prop("checked", false);
                }
            });
            next();
        }
    });
})(document, window, jQuery);