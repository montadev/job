<?php
use App\User;
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
    return view('welcome');
});

Route::get('/dashbord', function () {
    return view('demand.dashbord');
});


  Route::get('/test', function () {
    
     $user=User::find(1);
     dd($user->profile->formations);
});

  /*** ****/

Route::get('/resume','profileController@resume')->name('resume');  

Route::get('/dashbord','profileController@dashbord')->name('dashbord');
/*****  show create profile ****/
Route::get('profile','profileController@index')->name('profile');
/*****  show update profile ****/
Route::get('updateProfile','profileController@showUpdateProfile')->name('showUpdateProfile');
/*****  save create profile ****/
Route::post('profile','profileController@saveUpdateProfile')->name('profile');
