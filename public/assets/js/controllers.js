'use strict';

/* Controllers */
var contactControllers = angular.module('contactControllers', []);

contactControllers.controller('ContactListCtrl', ['$scope', 'Contact', 'SearchService',
  function($scope, Contact, SearchService) {
    $scope.contacts = Contact.query();

    $scope.search = function() {
      if ( $scope.query === '' ) {
        $scope.contacts = Contact.query();
      } else {
        $scope.contacts = SearchService.query({ query: $scope.query });
      }
    };
  }]);

contactControllers.controller('ContactCtrl', ['$scope', '$routeParams', 'Contact', 
  function($scope, $routeParams, Contact) {
    $scope.contact = Contact.get({ contactId: $routeParams.contactId });
}]);
