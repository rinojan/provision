<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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

Route::group(['prefix'=>'dashboard','middleware'  =>'auth','namespace' => 'Admin'],function(){
    Route::get('/','DashboardController@index')->name('dashboard');


Route::group(['prefix'=>'users'], function () {
    Route::get('/','UserController@index')->name('user.index');
    Route::get('/create','UserController@create')->name('user.create');
    Route::post('/store','UserController@store')->name('user.store');

    Route::group(['prefix'=>'{user}'], function () {
    
    Route::get('/show','UserController@show')->name('user.show');
    Route::get('/edit','UserController@edit')->name('user.edit');
    Route::patch('/update','UserController@update')->name('user.update'); //update patch
    Route::get('/delete','UserController@delete')->name('user.delete');
    Route::delete('destroy','UserController@destroy')->name('user.destroy');

    

        });
    });


    Route::group(['prefix'=>'employees'], function () {
        Route::get('/','EmployeeController@index')->name('employee.index');
        Route::get('/create','EmployeeController@create')->name('employee.create');
        Route::get('ajaxRequest','EmployeeController@dropdown')->name('get.district');
        Route::get('ajaxRequest2','EmployeeController@dropdown2')->name('get.job'); //new
        Route::post('/store','EmployeeController@store')->name('employee.store');
    
        Route::group(['prefix'=>'{employee}'], function () {
        
        Route::get('/show','EmployeeController@show')->name('employee.show');
        Route::get('/edit','EmployeeController@edit')->name('employee.edit');
        Route::patch('/update','EmployeeController@update')->name('employee.update');
        Route::get('/delete','EmployeeController@delete')->name('employee.delete');
        Route::delete('destroy','EmployeeController@destroy')->name('employee.destroy');
    
        
    
            });
        });


        Route::group(['prefix'=>'customers'],function () {
            Route::get('/','CustomerController@index')->name('customer.index');
            Route::get('/create','CustomerController@create')->name('customer.create');
            Route::post('/store','CustomerController@store')->name('customer.store');
        
        Route::group(['prefix'=>'{customer}'], function () {
                
            Route::get('/show','CustomerController@show')->name('customer.show');
            Route::get('/edit','CustomerController@edit')->name('customer.edit');
            Route::patch('/update','CustomerController@update')->name('customer.update');
            Route::get('/delete','CustomerController@delete')->name('customer.delete');
            Route::delete('destroy','CustomerController@destroy')->name('customer.destroy');
            
               
                });
            });
    


Route::group(['prefix'=>'jobcategories'],function () {  //job categories nu varanum
    Route::get('/','JobCategoryController@index')->name('jobcategory.index');
    Route::get('/create','JobCategoryController@create')->name('jobcategory.create');
    Route::post('/store','JobCategoryController@store')->name('jobcategory.store');
    

    
    Route::group(['prefix'=>'{jobcategory}'], function () {
    
    Route::get('/show','JobCategoryController@show')->name('jobcategory.show');
    Route::get('/edit','JobCategoryController@edit')->name('jobcategory.edit');
    Route::patch('/update','JobCategoryController@update')->name('jobcategory.update');
    Route::get('/delete','JobCategoryController@delete')->name('jobcategory.delete');
    Route::delete('destroy','JobCategoryController@destroy')->name('jobcategory.destroy');
          
        });    
    });

Route::group(['prefix'=>'jobs'],function () {
    Route::get('/','JobController@index')->name('job.index');
    Route::get('/create','JobController@create')->name('job.create');
    Route::post('/store','JobController@store')->name('job.store');


    Route::group(['prefix'=>'{job}'], function () {   //oru job so not jobs here
    
        Route::get('/show','JobController@show')->name('job.show');
        Route::get('/edit','JobController@edit')->name('job.edit');
        Route::patch('/update','JobController@update')->name('job.update');
        Route::get('/delete','JobController@delete')->name('job.delete');
        Route::delete('destroy','JobController@destroy')->name('job.destroy');
        });
    });



       
                
        
        



});

require __DIR__.'/auth.php';