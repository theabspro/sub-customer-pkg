<?php
Route::group(['namespace' => 'Abs\SubCustomerPkg\Api', 'middleware' => ['api']], function () {
	Route::group(['prefix' => 'sub-tax-pkg/api'], function () {
		Route::group(['middleware' => ['auth:api']], function () {
			// Route::get('taxes/get', 'TaxController@getTaxes');
		});
	});
});