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

use App\Http\Controllers\HowtoBookController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThemeController;
use App\Libraries\Utility;


foreach( config( 'app.language_codes' ) as $languageCode ){

    $routePrefix = '';
    $urlPrefix   = '';

    if( $languageCode !== Utility::getDefaultLanguageCode() ){
        $urlPrefix   = $languageCode;
        $routePrefix = $languageCode . '-';
    }

    Route::group( [ 'prefix' => $urlPrefix, 'as' => $routePrefix ], function(){
        globalRoutes();
    } );

}

function globalRoutes(){

    Route::get( 'language/{languageCode}', [ LanguageController::class, 'changeLanguage' ] )->name( 'language.change' );
    Route::get( '/', [ HomeController::class, 'homepage' ] );

}

Route::get( '', [ HomeController::class, 'index' ] );
Route::get( 'how-to-book', [ HowtoBookController::class, 'index' ] );
Route::get( 'faq', [ QuestionsController::class, 'index' ] );

Route::group( [ 'prefix' => 'promotion' ], function(){
    Route::get( '', [ PromotionController::class, 'index' ] )->name( 'promotion.index' );
    Route::get( 'detail', [ PromotionController::class, 'detail' ] )->name( 'promotion.detail' );
} );

Route::group( [ 'prefix' => 'theme' ], function(){
    Route::get( 'fullpage', [ ThemeController::class, 'fullpage' ] );
} );
