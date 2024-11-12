<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\carModelController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\ColorController;

Route::get('/', function () {
    return view('home');
});

//MAKER
Route::get('makers', [MakerController::class, 'index'])->name('makers');
Route::post('maker', [MakerController::class, 'save'])->name('maker');
Route::get('maker/create', [MakerController::class, 'create'])->name('createMaker');
Route::post('maker/{id}}', [FuelController::class, 'edit'])->name('editMaker');
Route::patch('maker/create', [FuelController::class, 'update'])->name('updateMaker');
Route::delete('maker/{id}', [FuelController::class, 'delete'])->name('deleteMaker');
Route::post('maker/search', [FuelController::class, 'search'])->name('searchMaker');

//CARMODEL
Route::get('carModels', [carModelController::class, 'index'])->name('carModels');
Route::post('carModel', [carModelController::class, 'save'])->name('saveCarModel');
Route::get('carModel/create', [carModelController::class, 'create'])->name('createCarModel');
Route::post('carModel/{id}}', [carModelController::class, 'edit'])->name('editCarModel');
Route::patch('carModel/create', [carModelController::class, 'update'])->name('updateCarModel');
Route::delete('carModel/{id}', [carModelController::class, 'delete'])->name('deleteCarModel');
Route::post('carModels/search', [carModelController::class, 'search'])->name('searchCarModel');

// FUEL
Route::get('fuels', [FuelController::class, 'index'])->name('fuels');
Route::post('fuel', [FuelController::class, 'save'])->name('saveFuel');
Route::get('fuel/create', [FuelController::class, 'create'])->name('createFuel');
Route::post('fuel/{id}}', [FuelController::class, 'edit'])->name('editFuel');
Route::patch('fuel/create', [FuelController::class, 'update'])->name('updateFuel');
Route::delete('fuel/{id}', [FuelController::class, 'delete'])->name('deleteFuel');
Route::post('fuels/search', [FuelController::class, 'search'])->name('searchFuel');

// BODY
Route::get('bodies', [BodyController::class, 'index'])->name('bodies');
Route::post('body', [BodyController::class, 'save'])->name('saveBody');
Route::get('body/create', [BodyController::class, 'create'])->name('createBody');
Route::post('body/{id}}', [BodyController::class, 'edit'])->name('editBody');
Route::patch('body/create', [BodyController::class, 'update'])->name('updateBody');
Route::delete('body/{id}', [BodyController::class, 'delete'])->name('deleteBody');
Route::post('bodies/search', [BodyController::class, 'search'])->name('searchBodies');

// BODY
Route::get('colors', [ColorController::class, 'index'])->name('colors');
Route::post('color', [ColorController::class, 'save'])->name('saveColor');
Route::get('color/create', [ColorController::class, 'create'])->name('createColor');
Route::post('color/{id}}', [ColorController::class, 'edit'])->name('editColor');
Route::patch('color/create', [ColorController::class, 'update'])->name('updateColor');
Route::delete('color/{id}', [ColorController::class, 'delete'])->name('deleteColor');
Route::post('colors/search', [ColorController::class, 'search'])->name('searchColors');