<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\TeamsController;
use Illuminate\Http\Controllers\PlayersController;

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

Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/view-teams', [TeamsController::class, 'index']);

    // Team
    Route::post('save-team', 'App\Http\Controllers\TeamsController@store')->name('save-team');
    Route::put('update-team', 'App\Http\Controllers\TeamsController@update')->name('update-team');
    Route::get('view-teams', 'App\Http\Controllers\TeamsController@index')->name('view-teams');
    Route::get('delete-team/{id}', 'App\Http\Controllers\TeamsController@destroy')->name('delete-team');
    Route::get('edit-team/{id}', 'App\Http\Controllers\TeamsController@edit')->name('edit-team');
    Route::get('create-team', 'App\Http\Controllers\TeamsController@create')->name('create-team');

    // Player
    Route::post('save-player', 'App\Http\Controllers\PlayersController@store')->name('save-player');
    Route::put('update-player', 'App\Http\Controllers\PlayersController@update')->name('update-player');   
    Route::get('view-players/{id}', 'App\Http\Controllers\PlayersController@index')->name('view-players');
    Route::get('delete-player/{id}', 'App\Http\Controllers\PlayersController@destroy')->name('delete-player');
    Route::get('edit-player/{id}', 'App\Http\Controllers\PlayersController@edit')->name('edit-player');
    Route::get('add-player', 'App\Http\Controllers\PlayersController@create')->name('add-player');





});

require __DIR__.'/auth.php';
