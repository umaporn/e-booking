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

//////From Theme Starter kits
/* use App\Http\Controllers\ContactController;
use App\Http\Controllers\SpaController;

Route::get( '/{any}', [ SpaController::class, 'index' ] )->where( 'any', '.*' );
Route::get( 'contact', [ ContactController::class, 'index' ] );
Route::post( 'contact', [ ContactController::class, 'store' ] ); */

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThemeController;

Route::get( '/', [ HomeController::class, 'index' ] );

Route::group( [ 'prefix' => 'theme' ], function(){
    Route::get( 'fullpage', [ ThemeController::class, 'fullpage' ] );
} );