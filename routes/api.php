<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TypeuserController;
use App\Http\Controllers\UserController;

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
});
*/
Route::apiResource('marksapi', MarksController::class);
Route::apiResource('modelsapi', ModelController::class);
Route::apiResource('categoriesapi', CategoryController::class);
Route::apiResource('productsapi', ProductController::class);
Route::apiResource('estatesapi', EstateController::class);
Route::apiResource('municipalitiesapi', MunicipalityController::class);
Route::apiResource('carsapi', CarController::class);
Route::apiResource('usersapi', UserController::class);
Route::apiResource('salesapi', SaleController::class);
Route::apiResource('imagesapi', ImageController::class);
Route::apiResource('typeusersapi', TypeuserController::class);

Route::get('MarksG', [MarksController::class,'index'])->name('Mark');
Route::post('MarksP',[MarksController::class,'index'])->name('Mark');
Route::put('MarksPut', [MarksController::class,'index'])->name('Mark');
Route::delete('MarksD',[MarksController::class,'index'])->name('Mark');
