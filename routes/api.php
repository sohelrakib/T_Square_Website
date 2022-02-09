<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Health')->prefix('health')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::get('/important_numbers', 'APIController@getNumbers');
    Route::post('/step_counter/store', 'APIController@stepCounterStore');
    Route::get('/step_counter/get', 'APIController@stepCounterGet');
    Route::get('/tips', 'APIController@getTips');
});

Route::namespace('Joke')->prefix('joke')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::get('/categories','APIController@getCategories');
    Route::get('/jokes','APIController@getJokes');
});

Route::namespace('Love')->prefix('love')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::get('/tips','APIController@getTips');
    Route::get('/quote/categories','APIController@getQuoteCategories');
    Route::get('/quotes','APIController@getQuotes');
    Route::get('/wallpapers','APIController@getWallpapers');
});

Route::namespace('Recipe')->prefix('recipe')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::get('/categories','APIController@getCategories');
    Route::get('/recipe/list','APIController@getRecipeList');
    Route::get('/recipe/view','APIController@getRecipeView');
});

Route::namespace('Beauty')->prefix('beauty')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::get('/tips', 'APIController@getTips');
});

Route::namespace('Islamic')->prefix('islamic')->group(function() {
    Route::post('/get_uid','APIController@getUid');
    Route::post('/subscribe','APIController@subscription');
    Route::post('/check_subscription', 'APIController@subscriptionCheck');
    Route::post('/unsubscribe', 'APIController@unsubscription');

    Route::group(['prefix'=>'sura'], function() {
        Route::get('/list', 'APIController@suraList');
        Route::get('/view', 'APIController@suraView');
    });

    Route::group(['prefix'=>'dua'], function() {
        Route::get('/list', 'APIController@duaList');
        Route::get('/view', 'APIController@duaView');
    });

    Route::get('hijri', 'APIController@getHijriDate');
    Route::get('hadith', 'APIController@getHadith');
});