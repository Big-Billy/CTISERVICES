var mainModule = angular.module('mainModule',[ngRoute]);

mainModule.config(function($routeProvider) {

	$routeProvider
		
		.when('/', {
			templateUrl:
			controller: 'dashboardController'
		})		
		.when('/', {
			templateUrl:
			controller:	
		})
		.when('/', {
			templateUrl:
			controller:	
		})
		.otherwise({
			templateUrl:
			controller:	
		})

});


mainModule.controller ('dashboardController', function ($scope) {

	var dashText = 'This is the Dashboard page, isn\'t it';
	
	$scope.dashboardText = dashText;

});

mainModule.controller ('propertiesController', function ($scope) {

});

mainModule.controller ('clientsController', function ($scope) {

});

mainModule.controller ('inspectorsController', function ($scope) {

});
