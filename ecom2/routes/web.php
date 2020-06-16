<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cushome', function () {
    return view('cushome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registercustomer', function () {
    return view('registercustomer');
});

Route::get('/registershopkeeper', function () {
    return view('registershopkeeper');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/error404', function () {
    return view('error404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/shopgrid', function () {
    return view('shopgrid');
});

Route::get('/singleproduct', function () {
    return view('singleproduct');
});


Route::get('/dashboard2', function () {
    return view('/shopkeeper/dashboard2');
});


Route::get('/customerview', function () {
    return view('customerview');
});

Route::get('/shkdash', function () {
    return view('/shkview/shkdashboard');
});

Route::get('/admin', function () {
    return view('/admin/index');
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/adminprofile', function () {
    return view('/admin/profile');
});

Route::get('/adminabout', function () {
    return view('/admin/adminaboutus');
});

Route::get('/adminlogin', function () {
    return view('/admin/adminlogin');
});

Route::get('/adminreg', function () {
    return view('/admin/register');
});

Route::get('/adminprofile', function () {
    return view('/admin/profile');
});

Route::get('/chart', function () {
    return view('/admin/chart');
});

Route::get('/table', function () {
    return view('/admin/table');
});



Route::post('/customer', 'customerController@userregister');
Route::post('/shopkeeper', 'shopkeeperrequestController@StoreRequest');

Route::post('/checkcustomer', 'loginController@checkCustomer');
Route::get('/checkadmin', 'loginController@checkAdmin');
Route::get('/logoutadmin', 'loginController@logout');
Route::get('/successlogin', 'loginController@successlogin');

//Route::post('/registeradmin', 'AdminRegController@adminregister');
Route::get('/contact', 'ContactController@getContact');
Route::post('/contactus', 'ContactController@saveContact');
Route::get('/contactview', 'ContactController@viewContact');

//Route::get('/validate', 'AdminRegController@validator');
// Route::resource( '/customer', 'customerController' );

// Route::get('/get-post-chart-data', 'ChartDataController@getMonthlyPostData');