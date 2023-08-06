<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'admin_locale']], function () {
    Route::get('/', 'Devi\Admin\Http\Controllers\Controller@redirectToLogin')->name('krayin.home');
    Route::prefix(config('app.admin_path'))->group(function () {

        Route::get('/', 'Devi\Admin\Http\Controllers\Controller@redirectToLogin');

        // Login Routes
        Route::get('login', 'Devi\Admin\Http\Controllers\User\SessionController@create')->name('admin.session.create');

        //login post route to admin auth controller
        Route::post('login', 'Devi\Admin\Http\Controllers\User\SessionController@store')->name('admin.session.store');

        // Forget Password Routes
        Route::get('forgot-password', 'Devi\Admin\Http\Controllers\User\ForgotPasswordController@create')->name('admin.forgot_password.create');

        Route::post('forgot-password', 'Devi\Admin\Http\Controllers\User\ForgotPasswordController@store')->name('admin.forgot_password.store');

        // Reset Password Routes
        Route::get('reset-password/{token}', 'Devi\Admin\Http\Controllers\User\ResetPasswordController@create')->name('admin.reset_password.create');

        Route::post('reset-password', 'Devi\Admin\Http\Controllers\User\ResetPasswordController@store')->name('admin.reset_password.store');

        Route::prefix('customers')->group(function () {
            Route::get('', 'Devi\Admin\Http\Controllers\Customers\CustomerController@index')->name('admin.customers.index');
        });

        Route::prefix('resources')->group(function () {
            Route::get('', 'Devi\Admin\Http\Controllers\Resources\ResourceController@index')->name('admin.resources.index');
        });

        Route::prefix('alliance')->group(function () {
            Route::get('', 'Devi\Admin\Http\Controllers\Alliance\AllianceController@index')->name('admin.alliance.index');

            Route::get('', 'Devi\Admin\Http\Controllers\Alliance\AllianceController@create')->name('admin.alliance.create');

            Route::post('', 'Devi\Admin\Http\Controllers\Alliance\AllianceController@store')->name('admin.alliance.edit');
        });

        // Route::controller(AllianceController::class)->prefix('alliance')->group(function () {
        //     Route::get('', 'index')->name('admin.alliance.index');

        //     Route::get('', 'create')->name('admin.alliance.create');

        //     Route::post('', 'store')->name('admin.alliance.edit');
        // });

        Route::prefix('services')->group(function () {
            Route::get('', 'Devi\Admin\Http\Controllers\Services\ServiceController@index')->name('admin.services.index');
        });

        Route::get('who-am-i', [Devi\Admin\Http\Controllers\Who_Am_I\WhoAmIController::class, 'index'])->name('admin.who-am-i.index');
        Route::get('who-am-i/create', [Devi\Admin\Http\Controllers\Who_Am_I\WhoAmIController::class, 'create'])->name('admin.who-am-i.create');

        // Admin Routes
        Route::group(['middleware' => ['user']], function () {
            Route::delete('logout', 'Devi\Admin\Http\Controllers\User\SessionController@destroy')->name('admin.session.destroy');

            // Dashboard Route
            Route::get('dashboard', 'Devi\Admin\Http\Controllers\Admin\DashboardController@index')->name('admin.dashboard.index');

            Route::get('template', 'Devi\Admin\Http\Controllers\Admin\DashboardController@template')->name('admin.dashboard.template');

            // API routes
            Route::group([
                'prefix'    => 'api',
            ], function () {
                Route::group([
                    'prefix'    => 'dashboard',
                ], function () {
                    Route::get('/cards', 'Devi\Admin\Http\Controllers\Admin\DashboardController@getCards')->name('admin.api.dashboard.cards.index');

                    Route::post('/cards', 'Devi\Admin\Http\Controllers\Admin\DashboardController@updateCards')->name('admin.api.dashboard.cards.update');
                });
            });

            // Groups Routes
            Route::prefix('groups')->group(function () {
                Route::get('', 'GroupController@index')->name('admin.settings.groups.index');

                Route::get('create', 'GroupController@create')->name('admin.settings.groups.create');

                Route::post('create', 'GroupController@store')->name('admin.settings.groups.store');

                Route::get('edit/{id}', 'GroupController@edit')->name('admin.settings.groups.edit');

                Route::put('edit/{id}', 'GroupController@update')->name('admin.settings.groups.update');

                Route::delete('{id}', 'GroupController@destroy')->name('admin.settings.groups.delete');
            });

            // User Routes
            Route::group([
                'prefix'    => 'account',
                'namespace' => 'Devi\Admin\Http\Controllers\User'
            ], function () {
                Route::get('', 'AccountController@edit')->name('admin.user.account.edit');

                Route::put('update', 'AccountController@update')->name('admin.user.account.update');
            });

            // Contacts Routes
            Route::group([
                'prefix'    => 'settings',
                'namespace' => 'Devi\Admin\Http\Controllers\Setting'
            ], function () {

                Route::get('', 'SettingController@index')->name('admin.settings.index');

                // Roles Routes
                Route::prefix('roles')->group(function () {
                    Route::get('', 'RoleController@index')->name('admin.settings.roles.index');

                    Route::get('create', 'RoleController@create')->name('admin.settings.roles.create');

                    Route::post('create', 'RoleController@store')->name('admin.settings.roles.store');

                    Route::get('edit/{id}', 'RoleController@edit')->name('admin.settings.roles.edit');

                    Route::put('edit/{id}', 'RoleController@update')->name('admin.settings.roles.update');

                    Route::delete('{id}', 'RoleController@destroy')->name('admin.settings.roles.delete');
                });

                // Users Routes
                Route::prefix('users')->group(function () {
                    Route::get('', 'UserController@index')->name('admin.settings.users.index');

                    Route::get('create', 'UserController@create')->name('admin.settings.users.create');

                    Route::post('create', 'UserController@store')->name('admin.settings.users.store');

                    Route::get('edit/{id?}', 'UserController@edit')->name('admin.settings.users.edit');

                    Route::put('edit/{id}', 'UserController@update')->name('admin.settings.users.update');

                    Route::delete('{id}', 'UserController@destroy')->name('admin.settings.users.delete');

                    Route::put('mass-update', 'UserController@massUpdate')->name('admin.settings.users.mass_update');

                    Route::put('mass-destroy', 'UserController@massDestroy')->name('admin.settings.users.mass_delete');
                });
            });
        });
    });
});
