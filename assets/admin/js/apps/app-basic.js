/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.App = Site.extend({
        handleSlidePanel: function() {
            if (typeof $.slidePanel === "undefined") return;
            var defaults = $.components.getDefaults("slidePanel");
            var options = $.extend({}, defaults, {
                template: function(options) {
                    return '<div class="' + options.classes.base + " " + options.classes.base + "-" + options.direction + '">' + '<div class="' + options.classes.base + '-scrollable"><div>' + '<div class="' + options.classes.content + '"></div>' + "</div></div>" + '<div class="' + options.classes.base + '-handler"></div>' + "</div>";
                },
                afterLoad: function() {
                    this.$panel.find("." + this.options.classes.base + "-scrollable").asScrollable({
                        namespace: "scrollable",
                        contentSelector: ">",
                        containerSelector: ">"
                    });
                }
            });
            $(document).on("click", "[data-toggle=slidePanel]", function(e) {
                $.slidePanel.show({
                    url: $(this).data("url"),
                    settings: {
                        cache: false
                    }
                }, options);
                e.stopPropagation();
            });
        },
        handleMultiSelect: function() {
            var $all = $(".select-all");
            $(document).on("change", ".multi-select", function(e, isSelectAll) {
                if (isSelectAll) return;
                var $select = $(".multi-select"), total = $select.length, checked = $select.find("input:checked").length;
                if (total === checked) {
                    $all.find("input").prop("checked", true);
                } else {
                    $all.find("input").prop("checked", false);
                }
            });
            $all.on("change", function(e) {
                var checked = $(this).find("input").prop("checked");
                $(".multi-select input").each(function() {
                    $(this).prop("checked", checked).trigger("change", [ true ]);
                });
            });
        },
        handleAppSidebar: function() {
            var $aside = $(".page-aside");
            $(document).on("click", ".page-aside-switch", function() {
                var isOpen = $aside.hasClass("open");
                if (isOpen) {
                    $aside.removeClass("open");
                } else {
                    $aside.addClass("open");
                }
            });
        },
        run: function(next) {
            this.handleSlidePanel();
            this.handleAppSidebar();
            next();
        }
    });
})(document, window, jQuery);