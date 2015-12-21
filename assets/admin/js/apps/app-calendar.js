/*!
 * remark v1.0.0 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingSurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(document, window, $) {
    "use strict";
    var $win = $(window), $doc = $(document), $body = $(document.body);
    window.AppCalendar = App.extend({
        handleFullcalendar: function() {
            var my_events = [ {
                title: "All Day Event",
                start: "2014-11-01"
            }, {
                title: "Long Event",
                start: "2014-11-07",
                end: "2014-11-10",
                backgroundColor: $.colors("cyan", 600),
                borderColor: $.colors("cyan", 600)
            }, {
                id: 999,
                title: "Repeating Event",
                start: "2014-11-09T16:00:00",
                backgroundColor: $.colors("red", 600),
                borderColor: $.colors("red", 600)
            }, {
                title: "Conference",
                start: "2014-11-11",
                end: "2014-11-13"
            }, {
                title: "Meeting",
                start: "2014-11-12T10:30:00",
                end: "2014-11-12T12:30:00"
            }, {
                title: "Lunch",
                start: "2014-11-12T12:00:00"
            }, {
                title: "Meeting",
                start: "2014-11-12T14:30:00"
            }, {
                title: "Happy Hour",
                start: "2014-11-12T17:30:00"
            }, {
                title: "Dinner",
                start: "2014-11-12T20:00:00"
            }, {
                title: "Birthday Party",
                start: "2014-11-13T07:00:00"
            } ];
            var my_options = {
                header: {
                    left: null,
                    center: "prev,title,next",
                    right: "month,agendaWeek,agendaDay"
                },
                defaultDate: "2014-11-12",
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $("#addNewEvent").modal("show");
                },
                editable: true,
                eventLimit: true,
                windowResize: function(view) {
                    var width = $(window).outerWidth();
                    var options = $.extend({}, my_options);
                    options.events = view.events;
                    options.aspectRatio = width < 667 ? .5 : 1.35;
                    $("#calendar").fullCalendar("destroy");
                    $("#calendar").fullCalendar(options);
                },
                eventDragStart: function() {
                    $(".site-action").addClass("toggle-action");
                },
                eventDragStop: function() {
                    $(".site-action").removeClass("toggle-action");
                },
                events: my_events
            };
            var _options;
            var my_options_mobile = $.extend({}, my_options);
            my_options_mobile.aspectRatio = .5;
            _options = $(window).outerWidth() < 667 ? my_options_mobile : my_options;
            $("#calendar").fullCalendar(_options);
        },
        handleSelective: function() {
            var member = [ {
                id: "uid_1",
                name: "Herman Beck",
                avatar: "../../../assets/portraits/1.jpg"
            }, {
                id: "uid_2",
                name: "Mary Adams",
                avatar: "../../../assets/portraits/2.jpg"
            }, {
                id: "uid_3",
                name: "Caleb Richards",
                avatar: "../../../assets/portraits/3.jpg"
            }, {
                id: "uid_4",
                name: "June Lane",
                avatar: "../../../assets/portraits/4.jpg"
            } ];
            var items = [ {
                id: "uid_1",
                name: "Herman Beck",
                avatar: "../../../assets/portraits/1.jpg"
            }, {
                id: "uid_2",
                name: "Caleb Richards",
                avatar: "../../../assets/portraits/2.jpg"
            } ];
            $('[data-plugin="jquery-selective"]').selective({
                namespace: "addMember",
                local: member,
                selected: items,
                buildFromHtml: false,
                tpl: {
                    optionValue: function(data) {
                        return data.id;
                    },
                    frame: function() {
                        return '<div class="' + this.namespace + '">' + this.options.tpl.items.call(this) + '<div class="' + this.namespace + '-trigger">' + this.options.tpl.triggerButton.call(this) + '<div class="' + this.namespace + '-trigger-dropdown">' + this.options.tpl.list.call(this) + "</div>" + "</div>" + "</div>";
                    },
                    triggerButton: function() {
                        return '<div class="' + this.namespace + '-trigger-button"><i class="wb-plus"></i></div>';
                    },
                    listItem: function(data) {
                        return '<li class="' + this.namespace + '-list-item"><img class="avatar" src="' + data.avatar + '">' + data.name + "</li>";
                    },
                    item: function(data) {
                        return '<li class="' + this.namespace + '-item"><img class="avatar" src="' + data.avatar + '" title="' + data.name + '">' + this.options.tpl.itemRemove.call(this) + "</li>";
                    },
                    itemRemove: function() {
                        return '<span class="' + this.namespace + '-remove"><i class="wb-minus-circle"></i></span>';
                    },
                    option: function(data) {
                        return '<option value="' + this.options.tpl.optionValue.call(this, data) + '">' + data.name + "</option>";
                    }
                }
            });
        },
        handleAction: function() {
            $(".site-action").on("click", function(e) {
                var $this = $(this);
                if (!$this.hasClass("toggle-action")) {
                    $("#addNewCalendarForm").modal("show");
                }
            });
            $(".site-action").on("mouseover", function(e) {
                var $this = $(this);
                if ($this.hasClass("toggle-action")) {
                    $(this).addClass("active");
                }
            });
            $(".site-action").on("mouseleave", function(e) {
                var $this = $(this);
                if ($this.hasClass("toggle-action")) {
                    $(this).removeClass("active");
                }
            });
        },
        run: function(next) {
            $("#addNewCalendarForm").modal({
                show: false
            });
            this.handleFullcalendar();
            this.handleAction();
            this.handleSelective();
            next();
        }
    });
})(document, window, jQuery);