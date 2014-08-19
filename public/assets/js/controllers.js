'use strict';

/* Controllers */
var contactControllers = angular.module('contactControllers', []);

contactControllers.controller('ContactListCtrl', ['$scope', 'Contact',
  function($scope, Contact) {
    $scope.contacts = Contact.query();
  }]);
