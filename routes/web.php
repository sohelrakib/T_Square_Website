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
Route::namespace('HomePage')->group(function() {
    Route::get('/', 'HomepageController@index')->name('home');
    Route::get('/about-us', 'HomepageController@about')->name('about-us');
    Route::get('/contact-us', 'HomepageController@contact')->name('contact-us');

    Route::get('/feature', 'HomepageController@feature')->name('feature');
    Route::get('/feature/islamic', 'HomepageController@islamic')->name('feature.islamic');
    Route::get('/feature/health', 'HomepageController@health')->name('feature.health');
    Route::get('/feature/love', 'HomepageController@love')->name('feature.love');
    Route::get('/feature/beauty', 'HomepageController@beauty')->name('feature.beauty');
    Route::get('/feature/joke', 'HomepageController@joke')->name('feature.joke');
    Route::get('/feature/recipe', 'HomepageController@recipe')->name('feature.recipe');

    Route::get('/service', 'HomepageController@service')->name('service');
    Route::get('/service/website', 'HomepageController@website')->name('service.website');
    Route::get('/service/software', 'HomepageController@software')->name('service.software');
    Route::get('/service/marketing', 'HomepageController@marketing')->name('service.marketing');
    Route::get('/service/platform', 'HomepageController@platform')->name('service.platform');
    Route::get('/service/app-design', 'HomepageController@design')->name('service.app-design');
    Route::get('/service/strategy', 'HomepageController@strategy')->name('service.strategy');
});

Route::namespace('Landing')->prefix('app')->group(function() {
    Route::get('/clear', function(){
    	echo "welcome for cache,config,view clear<br>";
    	Artisan::call('cache:clear');
		Artisan::call('config:clear');
		Artisan::call('config:cache');
		Artisan::call('view:clear');
		return "Cleared!";
    });

    Route::get('/','AppLandingController@index')->name('/');
    Route::get('/islamic','AppLandingController@islamic')->name('islamic');
    Route::get('/joke','AppLandingController@joke')->name('joke');
    Route::get('/beauty','AppLandingController@beauty')->name('beauty');
    Route::get('/health','AppLandingController@health')->name('health');
    Route::get('/love','AppLandingController@love')->name('love');
    Route::get('/recipe','AppLandingController@recipe')->name('recipe');
});