/*!
 * remark v1.0.1 (http://getbootstrapadmin.com/remark)
 * Copyright 2015 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */
(function(window, document, $, angular) {
  'use strict';

  angular.module('angularapp.angularui.grids', ['ui.grid', 'ui.grid.exporter', 'ui.grid.pagination', 'ui.grid.paging', 'ui.grid.edit', 'ui.grid.selection', 'ui.grid.cellNav'])
    .controller('GridBasicDemoController', function($scope) {
      $scope.data = $scope.model.test;
    }).controller('GridFooterDemoController', ['$scope', 'uiGridConstants', function($scope, uiGridConstants) {
      $scope.gridOptions = {
        showFooter: true,
        data: $scope.model.people,
        columnDefs: [{
          field: 'name',
          aggregationType: uiGridConstants.aggregationTypes.count,
          width: '25%'
        }, {
          field: 'address.street',
          aggregationType: uiGridConstants.aggregationTypes.sum,
          width: '25%'
        }, {
          field: 'age',
          aggregationType: uiGridConstants.aggregationTypes.avg,
          aggregationHideLabel: true,
          width: '25%'
        }, {
          name: 'customCellTemplate',
          field: 'age',
          width: '25%',
          footerCellTemplate: '<div class="ui-grid-cell-contents" style="background-color: #f96868;color: White">custom template</div>'
        }]
      };
    }]).controller('GridPaginationDemoController', function($scope) {
      $scope.gridOptions = {
        columnDefs: [{
          name: 'name'
        }, {
          name: 'gender'
        }, {
          name: 'company'
        }],
        onRegisterApi: function(gridApi) {
          $scope.gridApi = gridApi;
        },
        data: $scope.model.people
      };
    }).controller('GridPagingDemoController', function($scope) {
      $scope.gridOptions = {
        data: $scope.model.people,
        pagingPageSizes: [25, 50, 75],
        pagingPageSize: 25,
        columnDefs: [{
          name: 'name'
        }, {
          name: 'gender'
        }, {
          name: 'company'
        }]
      };
    }).controller('GridColumnsDemoController', ['$scope', 'uiGridConstants', function($scope, uiGridConstants) {
      $scope.columns = [{
        field: 'name'
      }, {
        field: 'gender'
      }];

      $scope.disableAdd = false;
      $scope.disableRemove = true;

      $scope.gridOptions = {
        data: $scope.model.people,
        enableSorting: true,
        columnDefs: $scope.columns,
        onRegisterApi: function(gridApi) {
          $scope.gridApi = gridApi;
        }
      };
      $scope.removeLastCol = function() {
        $scope.columns.splice($scope.columns.length - 1, 1);

        $scope.disableAdd = false;
        $scope.disableRemove = true;
      };

      $scope.addCol = function() {
        if ($scope.columns && $scope.columns.length > 0) {
          $scope.columns.push({
            field: 'company',
            enableSorting: false
          });
        } else {
          $scope.columns = [{
            field: 'company',
            enableSorting: false
          }];
        }
        $scope.disableAdd = true;
        $scope.disableRemove = false;
      };

      $scope.toggleFirstColVisible = function() {
        if ($scope.columns && $scope.columns.length > 0) {
          $scope.columns[0].visible = !($scope.columns[0].visible || $scope.columns[0].visible === undefined);
          $scope.gridApi.core.notifyDataChange($scope.gridApi.grid, uiGridConstants.dataChange.COLUMN);
        }
      };

    }]).controller('GridDataDemoController', function($scope) {
      var data1 = $scope.model.test,
        data2 = $scope.model.test2,
        origdata1 = angular.copy(data1),
        origdata2 = angular.copy(data2);

      $scope.swapData = function() {
        if ($scope.gridOptions.data === data1) {
          $scope.gridOptions.data = data2;
        } else {
          $scope.gridOptions.data = data1;
        }
      };

      $scope.addData = function() {
        var n = $scope.gridOptions.data.length + 1;
        $scope.gridOptions.data.push({
          "firstName": "New " + n,
          "lastName": "Person " + n,
          "company": "abc",
          "employed": true
        });
      };

      $scope.removeFirstRow = function() {
        if ($scope.gridOptions.data.length > 0) {
          $scope.gridOptions.data.splice(0, 1);
        }
      };

      $scope.reset = function() {
        data1 = angular.copy(origdata1);
        data2 = angular.copy(origdata2);

        $scope.gridOptions.data = data1;
      };

      $scope.gridOptions = {
        data: data1
      };
    }).controller('GridSingleSelectDemoController', ['$scope', '$interval', function($scope, $interval) {
      $scope.gridOptions = {
        data: $scope.model.people,
        enableRowSelection: true,
        enableRowHeaderSelection: false,
        columnDefs: [{
          name: 'id'
        }, {
          name: 'name'
        }, {
          name: 'age',
          displayName: 'Age (not focusable)',
          allowCellFocus: false
        }, {
          name: 'address.city'
        }],
        multiSelect: false,
        modifierKeysToMultiSelect: false,
        noUnselect: true,
        onRegisterApi: function(gridApi) {
          $scope.gridApi = gridApi;
          $scope.gridApi.selection.selectRow($scope.gridOptions.data[0]);
        }
      };

      $interval(function() {
        $scope.gridApi.selection.selectRow($scope.gridOptions.data[0]);
      }, 0, 1);
    }]).controller('GridMultiSelectDemoController', function($scope) {
      $scope.gridOptions = {
        data: $scope.model.people,
        enableRowSelection: true,
        enableSelectAll: true,
        selectionRowHeaderWidth: 35,
        columnDefs: [{
          name: 'id'
        }, {
          name: 'name'
        }, {
          name: 'age',
          displayName: 'Age (not focusable)',
          allowCellFocus: false
        }, {
          name: 'address.city'
        }],
        multiSelect: true,
        onRegisterApi: function(gridApi) {
          //set gridApi on scope
          $scope.gridApi = gridApi;
          gridApi.selection.on.rowSelectionChanged($scope, function(row) {
            var msg = 'row selected ' + row.isSelected;
          });

          gridApi.selection.on.rowSelectionChangedBatch($scope, function(rows) {
            var msg = 'rows changed ' + rows.length;
          });
        }
      };

      $scope.toggleMultiSelect = function() {
        $scope.gridApi.selection.setMultiSelect(!$scope.gridApi.grid.options.multiSelect);
      };

      $scope.selectAll = function() {
        $scope.gridApi.selection.selectAllRows();
      };

      $scope.clearAll = function() {
        $scope.gridApi.selection.clearSelectedRows();
      };

      $scope.toggleRow1 = function() {
        $scope.gridApi.selection.toggleRowSelection($scope.gridOptions.data[0]);
      };
    }).controller('GridEditDemoController', function($scope) {
      var data = $scope.model.people;
      for (var i = 0; i < data.length; i++) {
        data[i].registered = new Date(data[i].registered);
        data[i].gender = data[i].gender === 'male' ? 1 : 2;
      }
      $scope.gridOptions = {
        columnDefs: [{
          name: 'id',
          enableCellEdit: false,
          width: '10%'
        }, {
          name: 'name',
          displayName: 'Name (editable)',
          width: '20%'
        }, {
          name: 'age',
          displayName: 'Age',
          type: 'number',
          width: '10%'
        }, {
          name: 'registered',
          displayName: 'Registered',
          type: 'date',
          cellFilter: 'date:"yyyy-MM-dd"',
          width: '30%'
        }, {
          name: 'address.city',
          displayName: 'Address (even rows editable)',
          width: '20%',
          cellEditableCondition: function($scope) {
            return $scope.rowRenderIndex % 2
          }
        }, {
          name: 'isActive',
          displayName: 'Active',
          type: 'boolean',
          width: '10%'
        }],
        data: data,
        onRegisterApi: function(gridApi) {
          $scope.gridApi = gridApi;
        }
      };
    }).controller('GridStylingDemoController', ['$scope', '$interval', '$q', function($scope, $interval, $q) {
      var fakeI18n = function(title) {
        var deferred = $q.defer();
        $interval(function() {
          deferred.resolve('col: ' + title);
        }, 1000, 1);
        return deferred.promise;
      };

      $scope.gridOptions = {
        exporterMenuCsv: false,
        enableGridMenu: true,
        gridMenuTitleFilter: fakeI18n,
        gridMenuCustomItems: [{
          title: 'Rotate Grid',
          action: function($event) {
            this.grid.element.toggleClass('rotated');
          }
        }],
        onRegisterApi: function(gridApi) {
          $scope.gridApi = gridApi;

          // interval of zero just to allow the directive to have initialized
          $interval(function() {
            gridApi.core.addToGridMenu(gridApi.grid, [{
              title: 'Dynamic item'
            }]);
          }, 0, 1);
        },
        data: $scope.model.test,
        headerTemplate: '<div class="ui-grid-top-panel" style="text-align: center">I am a Custom Grid Header</div>',
        columnDefs: [{
          field: 'firstName',
          cellClass: 'red-col'
        }, {
          field: 'company',
          cellClass: function(grid, row, col, rowRenderIndex, colRenderIndex) {
            if (grid.getCellValue(row, col) === 'Velity') {
              return 'blue';
            }
          }
        }]
      };
    }]);
})(window, document, jQuery, angular);
