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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form1','AdminController@store');

Route::get('/manuscript','AdminController@store1');
Route::get('/higher','AdminController@store2');
Route::get('/formB','AdminController@store3');
Route::get('/formA','AdminController@store4');

Route::get('/index','AdminController@show');

Route::match(['get','post'],'/admin','AdminController@login');

Route::get('/logout','AdminController@logout');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@settings');
    Route::get('/admin/check-pwd','AdminController@chkpwd');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');
    Route::post('/saveformB','formBController@store');
     Route::get('/admin/formBview', function () {
         Route::post('/saveformB','formBController@store');
          $data=App\formB::all();
          return view('admin.formBview')->with('details',$data);
     });
     Route::post('/savemanuscript','manuscriptController@store1');
     Route::get('/admin/manuscriptview', function () {
         Route::post('/savemanuscript','manuscriptController@store1');
          $data=App\manuscript::all();
          return view('admin.manuscriptview')->with('details',$data);
     });
    
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

