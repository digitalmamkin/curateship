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

Route::prefix('ad')->group(function() {
    Route::get('/', 'AdController@index');
});

  
  Route::get('/admin/ad/popups',function(){
    return view('ad::popups.index');
  });

  Route::get('/admin/ad/templates',function(){
    return view('ad::popups.templates');
  });