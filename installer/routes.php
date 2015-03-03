<?php

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', [
        'as'   => 'home',
        'uses' => 'HomeController@index'
    ]);
});

/**
 * Nukacode Core
 */
include_once(base_path() . '/vendor/nukacode/core/src/routes.php');

/**
 * Nukacode Front End Bootstrap
 */
include_once(base_path() .'/vendor/nukacode/front-end-bootstrap/src/routes.php');

/**
 * Nukacode Users
 */
include_once(base_path() .'/vendor/nukacode/users/src/routes.php');

/**
 * Nukacode Admin
 */
include_once(base_path() .'/vendor/nukacode/admin/src/routes.php');