<?php
use App\Http\Controllers\SampleController;
use App\Http\Controllers\VfxController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/samples',[SampleController::class, 'index']);
Route::get('/samples/{sample}',[SampleController::class,'show']);
Route::post('/samples',[SampleController::class, 'store']);
Route::put('/samples/{sample}', [SampleController::class, 'update']);
Route::delete('/samples/{sample}',[SampleController::class, 'destroy']);

Route::get('/effects',[EffectController::class, 'index']);
Route::get('/effects/{effect}',[EffectController::class,'show']);
Route::post('/effects',[EffectController::class, 'store']);
Route::put('/effects/{effect}', [EffectController::class, 'update']);
Route::delete('/effects/{effect}',[EffectController::class, 'destroy']);
