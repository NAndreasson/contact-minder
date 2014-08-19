'use strict';

/* App Module */
var contactApp = angular.module('contactApp', [
  'ngRoute',

  'contactControllers',
  'contactServices'
]);

contactApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/ada', {
        templateUrl: 'assets/partials/contacts-list.html',
        controller: 'ContactListCtrl'
      }).
      otherwise({
        redirectTo: '/ada'
      });
  }]);