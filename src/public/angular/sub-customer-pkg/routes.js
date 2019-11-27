app.config(['$routeProvider', function($routeProvider) {

    $routeProvider.
    //CUSTOMER
    when('/sub-customer-pkg/sub-customer/list', {
        template: '<sub-customer-list></sub-customer-list>',
        title: 'Sub Customers',
    }).
    when('/sub-customer-pkg/sub-customer/add', {
        template: '<sub-customer-form></sub-customer-form>',
        title: 'Add Sub Customer',
    }).
    when('/sub-customer-pkg/sub-customer/edit/:id', {
        template: '<sub-customer-form></sub-customer-form>',
        title: 'Edit Sub Customer',
    });
}]);