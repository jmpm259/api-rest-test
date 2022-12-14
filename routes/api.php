<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post('register', [App\Http\Controllers\api\RegisterController::class, 'register']);
Route::post('login', [App\Http\Controllers\api\RegisterController::class, 'login']);

Route::get('/', function () {
    $token = [
        'success' => true,
        'message' => "Acceso Success API",
    ];
    return response()->json($token, 200);
});

/*
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
*/
