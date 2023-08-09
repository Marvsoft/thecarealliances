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
        Route::post('community-store', 'community_store')->name('community-store');
        Route::post('create-your-plan-store', 'create_your_plan_store')->name('create-your-plan-store');
        Route::post('edutainment-culture-lifestyle-store', 'edutainment_culture_lifestyle_store')->name('edutainment-culture-lifestyle-store');
        Route::post('i-need-help-store', 'i_need_help_store')->name('i-need-help-store');
        Route::post('i-can-help-store', 'i_can_help_store')->name('i-can-help-store');
        Route::post('share-experiences-store', 'share_experiences_store')->name('share-experiences-store');

        Route::get('/', 'index')->name('ui.front.index');
        Route::get('create-your-plan', 'create_plan')->name('ui.front.create-your-plan');
        Route::get('create-new-community', 'create_new_community')->name('ui.front.create-new-community');
        Route::get('i-can-help', 'i_can_help')->name('ui.front.i-can-help');
        Route::get('who-am-i', 'who_am_i')->name('ui.front.who-am-i');
        Route::get('i-need-help', 'i_need_help')->name('ui.front.i-need-help');
        Route::get('edutainment-culture-and-lifestyle', 'edutainment_culture_and_lifestyle')->name('ui.front.edutainment-culture-and-lifestyle');
        Route::get('share-experiences', 'share_experiences')->name('ui.front.share-experiences');
        Route::get('mentoring-portal', 'mentoring_portal')->name('ui.front.mentoring-portal');
        Route::get('about-us', 'about_us')->name('ui.front.about_us');
        Route::get('all-list', 'all_list')->name('ui.front.all_list');
        Route::get('alliances', 'alliances')->name('ui.front.alliances');
        Route::get('blog-detail', 'blog_detail')->name('ui.front.blog_detail');
        Route::get('blogs', 'blogs')->name('ui.front.blogs');
        Route::get('contact-us', 'contact_us')->name('ui.front.contact_us');
        // Route::get('directory', 'directory')->name('ui.front.directory');
        Route::get('partners', 'partners')->name('ui.front.partners');
        Route::get('login', 'login')->name('ui.front.login');
        Route::get('sign-up', 'sign_up')->name('ui.front.sign_up');
        Route::get('services', 'services')->name('ui.front.services');
        Route::get('programs', 'programs')->name('ui.front.programs');
        Route::get('users', 'users')->name('ui.front.users');
        Route::get('password-reset', 'password_reset')->name('ui.front.password_reset');
    });

    Route::controller(SearchApiController::class)->prefix('user')->group(function () {
        Route::get('getzipcode', 'getAllZipcode')->name('ui.front.zipcode');
        Route::post('getCategory', 'getCategory')->name('ui.front.category');
        Route::post('searchCategory', 'searchCategory')->name('ui.front.searchcateory');
    });
});
