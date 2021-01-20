<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');
Route::get('category-index', 'CategoryController@index')->name('category.index');
Route::get('category-create', 'CategoryController@create')->name('category.create');
Route::get('/substore', 'CategoryController@substore')->name('category.substore');
Route::get('/subdestroy', 'CategoryController@subdestroy')->name('category.subdestroy');
Route::get('/childstore', 'CategoryController@childstore')->name('category.childstore');
Route::get('/childdestroy', 'CategoryController@childdestroy')->name('category.childdestroy');


Route::get('/category/{category}', 'CategoryController@category');
Route::get('/sub_category/{sub_category}/{category}', 'CategoryController@sub_category');
Route::get('/childcategory/{childcategory}/{sub_category}/{category}', 'CategoryController@childcategory');



Route::resource('employee', 'EmployeeController');
Route::get('employee', 'EmployeeController@index')->name('employee.index');
Route::get('employee_display', 'EmployeeController@employee_display')->name('employee.display');
Route::get('employee_profile/{employee}', 'EmployeeController@profile')->name('employee.profile');

Route::resource('vendor', 'VendorController');
Route::get('vendor', 'VendorController@index')->name('vendor.index');
Route::get('vendorlist', 'VendorController@vendorlist')->name('vendor.vendorlist');
Route::get('vendorproducts', 'VendorController@vendorproducts')->name('vendor.vendorproducts');
Route::get('/type/{type}', 'VendorController@type');

Route::resource('product', 'ProductController');
Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product_display', 'ProductController@product_display')->name('product.display');

Route::resource('stock', 'StockController');
Route::get('stock_display', 'StockController@stock_display')->name('stock.display');

Route::resource('client', 'ClientController');
Route::get('client', 'ClientController@index')->name('client.index');
Route::get('client_display', 'ClientController@client_display')->name('client.show');
Route::get('client_profile/{client}', 'ClientController@profile')->name('client.profile');
