<?php

use App\Http\Controllers\HowtoBookController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UnitController;
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

Route::get( '', [ HomeController::class, 'index' ] )->name( 'home.index' );
Route::get( 'how-to-book', [ HowtoBookController::class, 'index' ] )->name( 'how-to-book.index' );
Route::get( 'faq', [ QuestionsController::class, 'index' ] )->name( 'faq.index' );

Route::group( [ 'prefix' => 'promotion' ], function(){
    Route::get( '', [ PromotionController::class, 'index' ] )->name( 'promotion.index' );
    Route::get( 'detail', [ PromotionController::class, 'detail' ] )->name( 'promotion.detail' );
} );

Route::group( [ 'prefix' => 'theme' ], function(){
    Route::get( 'fullpage', [ ThemeController::class, 'fullpage' ] );
} );

Route::group( [ 'prefix' => 'projects' ], function(){
    Route::get( '', [ ProjectsController::class, 'index' ] )->name( 'projects.index' );
    Route::get( 'detail', [ ProjectsController::class, 'detail' ] )->name( 'projects.detail' );
} );

Route::group( [ 'prefix' => 'unit' ], function(){
    Route::get( '', [ UnitController::class, 'index' ] )->name( 'unit.index' );
    Route::get( 'detail', [ UnitController::class, 'detail' ] )->name( 'unit.detail' );
} );
