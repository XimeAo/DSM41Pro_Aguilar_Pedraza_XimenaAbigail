<?php

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
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('marks', MarksController::class);
Route::resource('models', ModelController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('estates', EstateController::class);
Route::resource('municipalities', MunicipalityController::class);
Route::resource('cars', CarController::class);
Route::resource('users', UserController::class);
Route::resource('sales', SaleController::class);
Route::resource('images', ImageController::class);
Route::resource('typeusers', TypeuserController::class);

Route::get('MarksG', [MarksController::class,'index'])->name('Mark');
Route::post('MarksP',[MarksController::class,'index'])->name('Mark');
Route::put('MarksPut', [MarksController::class,'index'])->name('Mark');
Route::delete('MarksD',[MarksController::class,'index'])->name('Mark');
