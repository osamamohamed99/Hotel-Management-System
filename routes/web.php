<?php

use Illuminate\Support\Facades\Auth;
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
// gust home without auth
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//home page for users
Route::get('/home', 'HomeController@index')->name('home');

//admin routes

//admin view users
Route::get('/admin/viewuser', 'adminController@viewusers')->name('viewusers');
//admin delete user
Route::delete('/admin/{id}', 'adminController@delete')->name("admin.delete");
//admin view rooms
Route::get('/admin/viewrooms', 'adminController@viewrooms')->name('viewrooms');
//admin change room status
Route::put('/admin/viewrooms/{id}', 'adminController@changestatus');

//user routes

//user view profile
Route::get('/user/viewprofile', 'usercontroller@viewprofile')->name('viewprofile');
//user edit profile
Route::get('/user/editprofile', 'usercontroller@editprofile')->name('editprofile');
Route::put('/user/viewprofile', 'usercontroller@update');


//reservaion routes
Route::get('/user/booking', 'reservationcontroller@index')->name('bookingview');
Route::put('/', 'reservationcontroller@reserve');
Route::get('/user/viewreserv', 'reservationcontroller@myReservation')->name('viewreserv');
Route::delete('/user/viewreserv/{id}', 'reservationcontroller@userdeletereservation')->name("user.delete");
Route::get('/admin/viewreserv', 'reservationcontroller@adminReservation')->name('adminviewreserv')->middleware('admin');
Route::delete('/admin/viewreserv/{id}', 'reservationcontroller@admindeletereservation')->name("admin.delete")->middleware('admin');
