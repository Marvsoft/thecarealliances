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
    Route::get('create-your-plan', 'create_plan')->name('ui.front.create-your-plan');
    Route::post('create-your-plan', 'create_plan_store')->name('ui.front.create-your-plan-store');
    Route::get('create-new-community', 'create_new_community')->name('ui.front.create-new-community');
    Route::post('create-new-community', 'create_new_community_store')->name('ui.front.create-new-community-store');
    Route::get('i-can-help', 'i_can_help')->name('ui.front.i-can-help');
    Route::post('i-can-help', 'i_can_help_store')->name('ui.front.i-can-help-store');
    Route::get('who-am-i', 'who_am_i')->name('ui.front.who-am-i');
    Route::get('i-need-help', 'i_need_help')->name('ui.front.i-need-help');
    Route::post('i-need-help', 'i_need_help_store')->name('ui.front.i-need-help-store');
    Route::get('edutainment-culture-and-lifestyle', 'edutainment_culture_and_lifestyle')->name('ui.front.edutainment-culture-and-lifestyle');
    Route::post('edutainment-culture-and-lifestyle-store', 'edutainment_culture_and_lifestyle_store')->name('ui.front.edutainment-culture-and-lifestyle-store');
    Route::get('share-experiences', 'share_experiences')->name('ui.front.share-experiences');
    Route::post('share-experiences', 'share_experiences_store')->name('ui.front.share-experiences-store');
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
// });
