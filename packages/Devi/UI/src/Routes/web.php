<?php

use Illuminate\Support\Facades\Route;
use Devi\UI\Http\Controllers\ExportController;
use Devi\UI\Http\Controllers\FrontController;

Route::group(['middleware' => ['web', 'user']], function () {

    /**
     * DataGrid export.
     */
    Route::post('/export', [ExportController::class, 'export'])->name('ui.datagrid.export');

    Route::get('/', [FrontController::class, 'index'])->name('ui.front.index');
});
