/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
$.components.register("portlets", {
    mode: "api",
    defaults: {
        item: ".panel",
        packery: {},
        draggabilly: {
            handle: ".panel-heading"
        }
    },
    init: function(context) {
        if (!$.fn.draggabilly || !$.fn.packery) return;
        var defaults = $.components.getDefaults("portlets");
        $('[data-plugin="portlets"]', context).each(function() {
            var $container = $(this), item = $container.data("item") ? $container.data("item") : defaults.item, packeryOptions = $.extend(true, {}, defaults.packery, $container.data("packery")), draggabillyOptions = $.extend(true, {}, defaults.draggabilly, $container.data("draggabilly"));
            var packery = new Packery(this, packeryOptions);
            $container.find(item).each(function(i, itemElem) {
                var draggie = new Draggabilly(itemElem, draggabillyOptions);
                packery.bindDraggabillyEvents(draggie);
            });
        });
        $(document).on("uikit.panel.close", '[data-plugin="portlets"]', function() {
            $(this).packery("layout");
        });
    }
});