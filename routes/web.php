<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\HowtoBookController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

>>>>>>> b61c4bfd605646d7badaab6cf3cd4f88b033d9f5
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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowtoBookController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
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

function globalRoutes()
{
    Route::get( 'language/{languageCode}', [ LanguageController::class, 'changeLanguage' ] )->name( 'language.change' );
    Route::get( '/', [ HomeController::class, 'homepage' ] )->name( 'homepage' );

    Route::group( [ 'prefix' => 'projects' ], function(){
        Route::get( '', [ ProjectsController::class, 'index' ] )->name( 'projects.index' );
        Route::get( 'detail/{slug?}', [ ProjectsController::class, 'detail' ] )->name( 'projects.detail' );
        Route::get( 'filter', [ ProjectsController::class, 'project_filter' ] )->name( 'projects.filter' );
    } );

    Route::group( [ 'prefix' => 'promotion' ], function(){
        Route::get( '', [ PromotionController::class, 'index' ] )->name( 'promotion.index' );
        Route::get( 'detail/{id}', [ PromotionController::class, 'detail' ] )->name( 'promotion.detail' );
    } );

    Route::get( 'faq', [ QuestionsController::class, 'index' ] )->name( 'faq.index' );
    Route::get( 'how-to-book', [ HowtoBookController::class, 'index' ] )->name( 'howtobook' );

    Route::post( 'search', [ HomeController::class, 'searchOption' ] )->name( 'searchOption' );

    Route::get( '/{project}/{type}/{location}/{unit}/{price}', [ HomeController::class, 'search' ] )->name( 'search.index' );

}

function addPrefixResourceRouteName( $prefix )
{
    return [
        'index'   => $prefix . '.index',
        'create'  => $prefix . '.create',
        'store'   => $prefix . '.store',
        'show'    => $prefix . '.show',
        'edit'    => $prefix . '.edit',
        'update'  => $prefix . '.update',
        'destroy' => $prefix . '.destroy',
    ];
}

Route::group( [ 'prefix' => 'theme' ], function(){
    Route::get( 'fullpage', [ ThemeController::class, 'fullpage' ] );
} );

<<<<<<< HEAD



=======
Route::group( [ 'prefix' => 'projects' ], function(){
    Route::get( '', [ ProjectsController::class, 'index' ] )->name( 'projects.index' );
    Route::get( 'detail', [ ProjectsController::class, 'detail' ] )->name( 'projects.detail' );
} );

Route::group( [ 'prefix' => 'unit' ], function(){
    Route::get( '', [ UnitController::class, 'index' ] )->name( 'unit.index' );
    Route::get( 'detail', [ UnitController::class, 'detail' ] )->name( 'unit.detail' );
} );
>>>>>>> b61c4bfd605646d7badaab6cf3cd4f88b033d9f5
