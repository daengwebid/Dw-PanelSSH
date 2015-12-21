/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(window, document, $, angular) {
  'use strict';
  angular.module('angularapp.angularui.bootstrap', ['ui.bootstrap'])
    .controller('AlertDemoController', function($scope) {
      $scope.alerts = $scope.model.alerts;

      $scope.addAlert = function() {
        $scope.alerts.push({
          msg: 'Another alert!'
        });
      };

      $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
      };
    })
    .controller('ButtonsDemoController', function($scope) {
      $scope.singleModel = $scope.model.buttons.singleModel;
      $scope.radioModel = $scope.model.buttons.radioModel;
      $scope.checkModel = $scope.model.buttons.checkModel;
    }).controller('CarouselDemoController', function($scope) {
      $scope.myInterval = $scope.model.carousel.myInterval;
      var slides = $scope.slides = [];
      $scope.addSlide = function() {
        var newWidth = 600 + slides.length + 1;
        slides.push({
          image: 'http://placekitten.com/' + newWidth + '/300',
          text: ['More', 'Extra', 'Lots of', 'Surplus'][slides.length % 4] + ' ' + ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
        });
      };
      for (var i = 0; i < 4; i++) {
        $scope.addSlide();
      }
    }).controller('CollapseDemoController', function($scope) {
      $scope.isCollapsed = $scope.model.collapse.isCollapsed;
    }).controller('DatepickerDemoController', function($scope) {
      $scope.today = function() {
        $scope.dt = new Date();
      };
      $scope.today();

      $scope.clear = function() {
        $scope.dt = null;
      };

      // Disable weekend selection
      $scope.disabled = function(date, mode) {
        return (mode === 'day' && (date.getDay() === 0 || date.getDay() === 6));
      };

      $scope.toggleMin = function() {
        $scope.minDate = $scope.minDate ? null : new Date();
      };
      $scope.toggleMin();

      $scope.open = function($event) {
        $event.preventDefault();
        $event.stopPropagation();

        $scope.opened = true;
      };

      $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
      };

      $scope.formats = $scope.model.datepicker.formats;
      $scope.format = $scope.formats[0];
    }).controller('DropdownDemoController', function($scope, $log) {
      $scope.toggled = function(open) {
        $log.log('Dropdown is now: ', open);
      };

      $scope.toggleDropdown = function($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.status.isopen = !$scope.status.isopen;
      };
    }).controller('ModalDemoController', function($scope, $modal, $log) {

      $scope.items = $scope.model.modal.items;
      $scope.animationsEnabled = true;
      $scope.open = function(size) {

        var modalInstance = $modal.open({
          animation: $scope.animationsEnabled,
          templateUrl: 'myModalContent.html',
          controller: 'ModalInstanceController',
          size: size,
          resolve: {
            items: function() {
              return $scope.items;
            }
          }
        });

        modalInstance.result.then(function(selectedItem) {
          $scope.selected = selectedItem;
        }, function() {
          $log.info('Modal dismissed at: ' + new Date());
        });

        $scope.toggleAnimation = function() {
          $scope.animationsEnabled = !$scope.animationsEnabled;
        };
      };

    }).controller('ModalInstanceController', function($scope, $modalInstance, items) {
      // Please note that $modalInstance represents a modal window (instance) dependency.
      // It is not the same as the $modal service used above.
      $scope.items = items;
      $scope.selected = {
        item: $scope.items[0]
      };

      $scope.ok = function() {
        $modalInstance.close($scope.selected.item);
      };

      $scope.cancel = function() {
        $modalInstance.dismiss('cancel');
      };
    }).controller('PaginationDemoController', function($scope, $log) {
      $scope.totalItems = $scope.model.pagination.totalItems;
      $scope.currentPage = $scope.model.pagination.currentPage;
      $scope.maxSize = $scope.model.pagination.maxSize;
      $scope.bigTotalItems = $scope.model.pagination.bigTotalItems;
      $scope.bigCurrentPage = $scope.model.pagination.bigCurrentPage;

      $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
      };

      $scope.pageChanged = function() {
        $log.log('Page changed to: ' + $scope.currentPage);
      };
    }).controller('PopoverDemoController', function($scope) {
      $scope.dynamicPopover = $scope.model.popover.dynamicPopover;
      $scope.dynamicPopoverTitle = $scope.model.popover.dynamicPopoverTitle;
    }).controller('ProgressbarDemoController', function($scope) {

      $scope.max = $scope.model.progressbar.max;

      $scope.random = function() {
        var value = Math.floor((Math.random() * 100) + 1);
        var type;

        if (value < 25) {
          type = 'success';
        } else if (value < 50) {
          type = 'info';
        } else if (value < 75) {
          type = 'warning';
        } else {
          type = 'danger';
        }

        $scope.showWarning = (type === 'danger' || type === 'warning');

        $scope.dynamic = value;
        $scope.type = type;
      };
      $scope.random();

      $scope.randomStacked = function() {
        $scope.stacked = [];
        var types = ['success', 'info', 'warning', 'danger'];

        for (var i = 0, n = Math.floor((Math.random() * 4) + 1); i < n; i++) {
          var index = Math.floor((Math.random() * 4));
          $scope.stacked.push({
            value: Math.floor((Math.random() * 30) + 1),
            type: types[index]
          });
        }
      };
      $scope.randomStacked();
    }).controller('RatingDemoController', function($scope) {
      $scope.rate = $scope.model.rating.rate;
      $scope.max = $scope.model.rating.max;
      $scope.isReadonly = $scope.model.rating.isReadonly;
      $scope.ratingStates = $scope.model.rating.ratingStates;

      $scope.hoveringOver = function(value) {
        $scope.overStar = value;
        $scope.percent = 100 * (value / $scope.max);
      };
    }).controller('TabsDemoController', function($scope, $window) {
      $scope.tabs = $scope.model.tabs;

      $scope.alertMe = function() {
        setTimeout(function() {
          $window.alert('You\'ve selected the alert tab!');
        });
      };
    }).controller('TimepickerDemoController', function($scope, $log) {
      $scope.mytime = new Date();

      $scope.hstep = $scope.model.timepicker.hstep;
      $scope.mstep = $scope.model.timepicker.mstep;
      $scope.options = $scope.model.timepicker.options;
      $scope.ismeridian = $scope.model.timepicker.ismeridian;

      $scope.toggleMode = function() {
        $scope.ismeridian = !$scope.ismeridian;
      };

      $scope.update = function() {
        var d = new Date();
        d.setHours(14);
        d.setMinutes(0);
        $scope.mytime = d;
      };

      $scope.changed = function() {
        $log.log('Time changed to: ' + $scope.mytime);
      };

      $scope.clear = function() {
        $scope.mytime = null;
      };
    }).controller('TooltipDemoController', function($scope) {
      $scope.dynamicTooltip = $scope.model.tooltip.dynamicTooltip;
      $scope.dynamicTooltipText = $scope.model.tooltip.dynamicTooltipText;
      $scope.htmlTooltip = $scope.model.tooltip.htmlTooltip;
    }).controller('TypeaheadDemoController', function($scope) {
      $scope.states = $scope.model.typeahead.states;
      $scope.statesWithFlags = $scope.model.typeahead.statesWithFlags;
      $scope.selected = undefined;
      // Any function returning a promise object can be used to load values asynchronously
      $scope.getLocation = function(val) {
        return $http.get('http://maps.googleapis.com/maps/api/geocode/json', {
          params: {
            address: val,
            sensor: false
          }
        }).then(function(response) {
          return response.data.results.map(function(item) {
            return item.formatted_address;
          });
        });
      };

    });

})(window, document, jQuery, angular);
