var mainModule = angular.module('mainModule',['ngRoute']);

mainModule.config(function($routeProvider) {

	$routeProvider

		.when('/', {
			templateUrl: 'includes/dashboard.html',
			controller: 'dashboardController'
		})		
		.when('/dashboard', {
			templateUrl: 'includes/dashboard.html',
			controller: 'dashboardController'
		})		
		.when('/properties', {
			templateUrl: 'includes/propertiesmainview.html',
			controller:	'propertiesController'
		})
		.when('/properties/:propertyAction', {
			templateUrl: 'includes/newpropertyinputform.html',
			controller:	'propertiesController'
		})
		.otherwise({
			templateUrl: 'includes/dashboard.html',
			controller:	'errorController'
		})

});


mainModule.controller ('dashboardController', function ($scope) {
	var dashText = 'This is the Dashboard page, isn\'t it';
	$scope.dashboardText = dashText;
})
mainModule.controller ('propertiesController', function ($scope) {

	if($routeParams ['propertyAction'] == 'AddNew') {

	}
		else if (routeParams ['propertyAction'] == 'Edit') {
	
	}
});
mainModule.controller ('errorController', function ($scope) {
	var dashText = 'This is not good';
	$scope.dashboardText=dashText;
});