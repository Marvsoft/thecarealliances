<?php

use Illuminate\Support\Facades\Route;
use Devi\UI\Http\Controllers\ExportController;
use Devi\UI\Http\Controllers\FrontController;
use Devi\UI\Http\Controllers\SearchApiController;

//user
Route::group(['middleware' => ['web']], function () {

    /**
     * DataGrid export.
     */
    Route::post('/export', [ExportController::class, 'export'])->name('ui.datagrid.export');

    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'index')->name('ui.front.index');
        Route::get('create-your-plan', 'create_plan')->name('ui.front.create-your-plan');
        Route::get('create-new-community', 'create_new_community')->name('ui.front.create-new-community');
        Route::get('i-can-help', 'i_can_help')->name('ui.front.i-can-help');
        Route::get('who-am-i', 'who_am_i')->name('ui.front.who-am-i');
        Route::get('i-need-help', 'i_need_help')->name('ui.front.i-need-help');
        Route::get('share-experiences', 'share_experiences')->name('ui.front.share-experiences');
        Route::get('mentoring-portal', 'mentoring_portal')->name('ui.front.mentoring-portal');
        Route::get('edutainment-culture-and-lifestyle', 'edutainment_culture_and_lifestyle')->name('ui.front.edutainment-culture-and-lifestyle');
    
        //form store routes
        // Route::group(['middleware' => ['web']], function () {
            Route::post('community-store', 'community_store')->name('community-store');
            Route::post('create-your-plan-store', 'create_your_plan_store')->name('create-your-plan-store');
            Route::post('edutainment-culture-lifestyle-store', 'edutainment_culture_lifestyle_store')->name('edutainment-culture-lifestyle-store');
            Route::post('i-need-help-store', 'i_need_help_store')->name('i-need-help-store');
            Route::post('i-can-help-store', 'i_can_help_store')->name('i-can-help-store');
            Route::post('share-experiences-store', 'share_experiences_store')->name('share-experiences-store');
        // });
    });


    Route::controller(SearchApiController::class)->prefix('user')->group(function () {
        Route::get('getzipcode', 'getAllZipcode')->name('ui.front.zipcode');
        Route::post('getCategory', 'getCategory')->name('ui.front.category');
        Route::post('searchCategory', 'searchCategory')->name('ui.front.searchcateory');
    });
});
