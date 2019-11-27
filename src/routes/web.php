<?php

Route::group(['namespace' => 'Abs\SubCustomerPkg', 'middleware' => ['web', 'auth'], 'prefix' => 'sub-customer-pkg'], function () {
	Route::get('/sub-customers/get-list', 'SubCustomerController@getSubCustomerList')->name('getSubCustomerList');
	Route::get('/sub-customer/get-form-data/{id?}', 'SubCustomerController@getSubCustomerFormData')->name('getSubCustomerFormData');
	Route::post('/sub-customer/save', 'SubCustomerController@saveSubCustomer')->name('saveSubCustomer');
	Route::get('/sub-customer/delete/{id}', 'SubCustomerController@deleteSubCustomer')->name('deleteSubCustomer');
});