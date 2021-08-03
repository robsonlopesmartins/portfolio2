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

Route::group(['middleware' => 'guest'], function(){;

    Route::get('/', 'HomeController@index')->name('home');
    
    Route::get('/improving-convertion-and-sales-using-ideo-deep-dive', 'HomeController@post1')->name('post1');
    Route::get('/making-a-complex-storytelling-looks-simple-in-a-home-page', 'HomeController@post2')->name('post2');
    Route::get('/ux-motion-design-for-a-birthday-wrapped-page-using-ae', 'HomeController@post3')->name('post3');
    Route::get('/user-experience-analysis-for-a-wine-retail-ecommerce', 'HomeController@post4')->name('post4');
    Route::get('/creating-a-new-website-for-a-health-professionals-platform', 'HomeController@post5')->name('post5');
    Route::get('/admin-dashboard-design-for-a-wine-company-providers', 'HomeController@post6')->name('post6');
    Route::get('/dashboard-design-to-help-store-managers-improving-sales', 'HomeController@post7')->name('post7');
    Route::get('/mobile-app-and-desktop-both-in-one-single-design-system', 'HomeController@post8')->name('post8');

});