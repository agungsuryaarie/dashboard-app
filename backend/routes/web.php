<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('penduduk/penduduk_count',  ['uses' => 'PendudukController@penduduk_count']);
    $router->get('penduduk/kecamatan_count',  ['uses' => 'PendudukController@kecamatan_count']);
    $router->get('penduduk/kelurahan_count',  ['uses' => 'PendudukController@kelurahan_count']);
    $router->get('penduduk/kecamatan_name',  ['uses' => 'PendudukController@kecamatan_name']);
    $router->get('penduduk/penduduk_kecamatan',  ['uses' => 'PendudukController@penduduk_kecamatan']);
    $router->get('penduduk/keluarga_kecamatan',  ['uses' => 'PendudukController@keluarga_kecamatan']);
    $router->get('penduduk/penduduk/kecamtan/{kecamatan}', ['uses' => 'PendudukController@kecamatan']);
    $router->get('penduduk/penduduk/desa/{desa}', ['uses' => 'PendudukController@desa']);
});