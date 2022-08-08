<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiContactController;
use App\Http\Controllers\ApiFooterController;
use App\Http\Controllers\ApiLayananController;
use App\Http\Controllers\ApiProdukController;
use App\Http\Controllers\ApiTentangKamiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('contacts')->group(function () {
    Route::controller(ApiContactController::class)->group(function () {
        Route::get('', 'index');
        Route::get('/{id}', 'detail');
        Route::post('', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});



Route::prefix('layanan')->group(function () {
    Route::controller(ApiLayananController::class)->group(function () {
        Route::get('', 'index');
        Route::get('/{id}', 'detail');
        Route::post('', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});


Route::prefix('produk')->group(function () {
    Route::controller(ApiProdukController::class)->group(function () {
        Route::get('', 'index');
        Route::get('/{id}', 'detail');
        Route::post('', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});



Route::prefix('tentang')->group(function () {
    Route::controller(ApiTentangKamiController::class)->group(function () {
        Route::get('', 'index');
        Route::get('/{id}', 'detail');
        Route::post('', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});



Route::prefix('footer')->group(function () {
    Route::controller(ApiFooterController::class)->group(function () {
        Route::get('', 'index');
        Route::get('/{id}', 'detail');
        Route::post('', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
});
