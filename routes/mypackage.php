<?php

/*
|--------------------------------------------------------------------------
| :uc:vendor\:uc:package Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the :uc:vendor\:uc:package package.
|
*/

/**
 * User Routes
 */

// Route::group([
//     'middleware'=> array_merge(
//     	(array) config('backpack.base.web_middleware', 'web'),
//     ),
// ], function() {
//     Route::get('something/action', \:uc:vendor\:uc:package\Http\Controllers\SomethingController::actionName());
// });


/**
 * Admin Routes
 */

// Route::group([
//     'prefix' => config('backpack.base.route_prefix', 'admin'),
//     'middleware' => array_merge(
//         (array) config('backpack.base.web_middleware', 'web'),
//         (array) config('backpack.base.middleware_key', 'admin')
//     ),
// ], function () {
//     Route::crud('some-entity-name', \:uc:vendor\:uc:package\Http\Controllers\Admin\EntityNameCrudController::class);
// });