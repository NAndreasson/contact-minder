'use strict';

/* Services */

var contactServices = angular.module('contactServices', ['ngResource']);

contactServices.factory('Contact', ['$resource',
  function($resource){
    return $resource('contacts/:contactId', {}, {
      query: {method:'GET', params:{contactId:''}, isArray:true}
    });
  }]);

contactServices.factory('SearchService', ['$resource',
  function($resource) {
    return $resource('contacts/search/:query', {}, {
      query: { method: 'GET', params: { query: '' }, isArray: true}
    });
  }
]);