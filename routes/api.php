<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\EstateController;
use App\Http\Controllers\api\ImageController;
use App\Http\Controllers\api\MarkController;
use App\Http\Controllers\api\ModelController;
use App\Http\Controllers\api\MunicipalityController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\SaleController;
use App\Http\Controllers\api\TypeuserController;
use App\Http\Controllers\api\UserController;

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
Route::apiResource('marksapi', MarkController::class);
Route::apiResource('modelsapi', ModelController::class);
Route::apiResource('categoriesapi', CategoryController::class);
Route::apiResource('productsapi', ProductController::class);
Route::apiResource('estatesapi', EstateController::class);
Route::apiResource('municipalitiesapi', MunicipalityController::class);
Route::apiResource('usersapi', UserController::class);
Route::apiResource('salesapi', SaleController::class);
Route::apiResource('imagesapi', ImageController::class);
Route::apiResource('typeusersapi', TypeuserController::class);

/*Route::get('MarksG', [MarkController::class,'index'])->name('Mark');
Route::post('MarksP',[MarkController::class,'index'])->name('Mark');
Route::put('MarksPut', [MarkController::class,'index'])->name('Mark');
Route::delete('MarksD',[MarkController::class,'index'])->name('Mark');*/
