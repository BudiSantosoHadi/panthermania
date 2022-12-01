<?php

use App\Http\Controllers\AgendakadminController;
use App\Http\Controllers\AgendakApiController;
use App\Http\Controllers\API\AgendakApiController as APIAgendakApiController;
use App\Http\Controllers\API\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DataOrderApiController as APIDataOrderApiController;
use App\Http\Controllers\API\DataProfileApiController as APIDataProfileApiController;
use App\Http\Controllers\API\ProductsApiController as APIProductsApiController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\DataOrderApiController;
use App\Http\Controllers\DataProfileApiController;
use App\Http\Controllers\ProductsApiController;
use App\Models\RegisterApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthCommand;

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



// Api products
Route::get('/products', [APIProductsApiController::class, 'index']);
Route::get('/products/{id}', [APIProductsApiController::class, 'show']);

// Api agenda
Route::get('/agendak', [APIAgendakApiController::class, 'index']);
Route::get('/agendak/{id}', [APIAgendakApiController::class, 'show']);

// Api profiles
Route::get('/dataprofiles/{id}', [APIDataProfileApiController::class, 'index']);

// Api orders
Route::get('/orders/{id}', [APIDataOrderApiController::class, 'index']);
Route::post('/storeorder', [APIDataOrderApiController::class, 'store']);

// Api Auth
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signup', [AuthAuthController::class, 'register']);
    Route::post('/signin', [LoginController::class, 'login']);
    Route::get('/user', [AuthAuthController::class, 'user']);
    Route::post('/token-refresh', [AuthAuthController::class, 'refresh']);
    Route::post('/logout/{id}', [AuthAuthController::class, 'signout']);
});

// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('user/signup', [UserController::class, 'register']);
//     Route::post('user/signin', [UserController::class, 'login']);
//     Route::get('user/user', [UserController::class, 'user']);
//     Route::post('user/token-refresh', [UserController::class, 'refresh']);
//     Route::post('user/signout', [UserController::class, 'signout']);
// });
