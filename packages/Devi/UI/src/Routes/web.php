<?php

use Illuminate\Support\Facades\Route;
use Devi\UI\Http\Controllers\ExportController;
use Devi\UI\Http\Controllers\FrontController;
use Devi\UI\Http\Controllers\SearchApiController;

// Route::group(['middleware' => ['web', 'user']], function () {

    /**
     * DataGrid export.
     */
    Route::post('/export', [ExportController::class, 'export'])->name('ui.datagrid.export');

    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'index')->name('ui.front.index');
        Route::get('create-your-plan', 'create_plan')->name('ui.front.create-plan');
        Route::get('create-new-community', 'create_new_community')->name('ui.front.create-new-community');
        Route::get('i-can-help', 'i_can_help')->name('ui.front.i-can-help');
        Route::get('who-am-i', 'who_am_i')->name('ui.front.who-am-i');
        Route::get('i-need-help', 'i_need_help')->name('ui.front.i-need-help');
        Route::get('share-experiences', 'share_experiences')->name('ui.front.share-experiences');
        Route::get('mentoring-portal', 'mentoring_portal')->name('ui.front.mentoring-portal');
    });


    Route::controller(SearchApiController::class)->prefix('user')->group(function () {
        Route::get('getzipcode', 'getAllZipcode')->name('ui.front.zipcode');
        Route::post('getCategory', 'getCategory')->name('ui.front.category');
        Route::post('searchCategory', 'searchCategory')->name('ui.front.searchcateory');
    });
// });
