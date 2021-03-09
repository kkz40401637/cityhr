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


Auth::routes();
Route::group(['middleware' => 'auth','middleware'=>'ban'], function() {


    // Universal Security routing ..........
//    Route::post('RealTimeCheckAuthStatus','GeneralUserController@RealTimeCheckAuthStatus')->name('RealTimeCheckAuthStatus');


    Route::group(['middleware'=>'admin'], function() {

        Route::get('/','DashboardController@AdminDashboard')->name('AdminDashboard');

    });

    Route::group(['middleware'=>'head','prefix'=>'head'], function() {

        Route::get('/','DashboardController@HeadDashboard')->name('HeadDashboard');



    });

    Route::group(['middleware'=>'leads','prefix'=>'leads'], function() {

        Route::get('/','DashboardController@LeadDashboard')->name('LeadDashboard');

    });

    Route::group(['middleware'=>'control','prefix'=>'control'], function() {

        Route::group(['prefix'=>'department'], function(){
            Route::get('/','DepartmentController@DepartmentList')->name('DepartmentList');
            Route::get('/add','DepartmentController@AddDepartmentList')->name('AddDepartmentList');
            Route::post('/store','DepartmentController@AddDepartmentStore')->name('AddDepartmentStore');
            Route::post('/change/department/status', 'DepartmentController@DepartmentStatusChange')->name('DepartmentStatusChange');
        });
        Route::group(['prefix'=>'company'], function(){
            Route::get('/','CompanyController@index')->name('Company');
            Route::get('/add','CompanyController@AddCompany')->name('AddCompany');
            Route::post('/SaveCompanyInfo','CompanyController@SaveCompanyInfo')->name('SaveCompanyInfo');
        });
        Route::group(['prefix'=>'station'], function(){
            Route::get('/','StationController@StationList')->name('StationList');
            Route::get('/add','StationController@AddStation')->name('AddStation');
            Route::post('/store','StationController@store')->name('store');
            Route::post('/change/station/status', 'StationController@StationStatusChange')->name('StationStatusChange');
        });
        Route::group(['prefix'=>'register'], function(){
            Route::get('/', 'RegisterController@UserList')->name('UserList');
            Route::get('/add', 'RegisterController@UserAddForm')->name('UserAddForm');
            Route::post('/add','RegisterController@UserCreat')->name('UserCreat');
            Route::post('/change/user/status', 'RegisterController@UserStatusChange')->name('UserStatusChange');
            Route::post('password/{id}reset','RegisterController@DefaultPassword')->name('DefaultPassword');
            Route::get('edit/{id}','RegisterController@UserEdit')->name('UserEdit');
        });
        Route::group(['prefix'=>'meeting'], function(){
            Route::get('/', 'MeetingController@Index')->name('Index');
            Route::get('/add', 'MeetingController@CreateMeetingForm')->name('CreateMeetingForm');
//            Route::post('/add','MeetingController@UserCreat')->name('UserCreat');
//            Route::post('/change/user/status', 'MeetingController@UserStatusChange')->name('UserStatusChange');
//            Route::post('password/{id}reset','MeetingController@DefaultPassword')->name('DefaultPassword');
//            Route::get('edit/{id}','MeetingController@UserEdit')->name('UserEdit');
        });

    });





});



