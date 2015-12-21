/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(window, document, $, angular) {
  "use strict";

  var AngularApp = angular.module("AngularApp");

  AngularApp.config(["$stateProvider", "$urlRouterProvider", "$ocLazyLoadProvider", function($stateProvider, $urlRouterProvider, $ocLazyLoadProvider) {
    $ocLazyLoadProvider.config({
      modules: [{
        name: "ui.grid",
        files: ["../../assets/vendor/angular-ui-grid/ui-grid.css", "../../assets/vendor/angular-ui-grid/ui-grid.min.js"]
      }, {
        name: "ui.bootstrap",
        files: ["../../assets/vendor/angular-ui-bootstrap/ui-bootstrap.min.js", "../../assets/vendor/angular-ui-bootstrap/ui-bootstrap-tpls.min.js"]
      }, {
        name: "ui.sortable",
        files: ["../../assets/vendor/jquery-ui/jquery-ui.min.js", "../../assets/vendor/angular-ui-sortable/sortable.js"]
      }]
    });

    $stateProvider.state("angularui", {
      url: "/angularui/:type",
      controller: "AngularUIController",
      templateUrl: function($stateParams) {
        return "templates/" + $stateParams.type + ".html";
      },
      resolve: {
        resoucre: function($http, $stateParams) {
          return $http.get("../../assets/data/angular/ui/" + $stateParams.type + ".json");
        },
        deps: ["$stateParams", "$ocLazyLoad", function($stateParams, $ocLazyLoad) {
          return $ocLazyLoad.load([{
            name: "angularapp.angularui." + $stateParams.type,
            files: ["../../assets/js/angular/ui/module-" + $stateParams.type + ".js"]
          }]);
        }]
      }
    });
  }]);
})(window, document, jQuery, angular);
