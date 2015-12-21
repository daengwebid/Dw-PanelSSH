/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function() {
  'use strict';
  angular.module('adminapp.angularui.select', ['ui.select'])
    .controller('UISelectDemoController', function($scope) {
      $scope.disabled = undefined;
      $scope.person = {};
      $scope.people = $scope.model.people;
      $scope.multipleDemo = {};
      $scope.multipleDemo.selectedPeople = [$scope.people[5], $scope.people[4]];
      $scope.bind = function() {
        $scope.person.selected = $scope.people[5];
      };
      $scope.enable = function() {
        $scope.disabled = false;
      };

      $scope.disable = function() {
        $scope.disabled = true;
      };

      $scope.groupFn = function(item) {
        if (item.name[0] >= 'A' && item.name[0] <= 'M')
          return 'From A - M';

        if (item.name[0] >= 'N' && item.name[0] <= 'Z')
          return 'From N - Z';

      };
    }).filter('propsFilter', function() {
      return function(items, props) {
        var out = [];

        if (angular.isArray(items)) {
          items.forEach(function(item) {
            var itemMatches = false;

            var keys = Object.keys(props);
            for (var i = 0; i < keys.length; i++) {
              var prop = keys[i];
              var text = props[prop].toLowerCase();
              if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                itemMatches = true;
                break;
              }
            }

            if (itemMatches) {
              out.push(item);
            }
          });
        } else {
          // Let the output be the input untouched
          out = items;
        }

        return out;
      };
    });

})();
