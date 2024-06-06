<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

// Route::get('/',[formController::class,'Home']);

// Route::get('/reg',[formController::class,'Index']);

// Route::post('/reg',[formController::class,'register']);

// Route::get('reg/view', [formController::class, 'view'])->name('customer.view');

// Route::get('reg/view/edit/{id}', [formController::class, 'edit'])->name('customer.edit');

// Route::post('reg/view/update/{id}', [formController::class, 'update'])->name('customer.update');

// Route::get('reg/view/delete/{id}', [formController::class, 'destroy'])->name('customer.delete');


// group Routing
Route::prefix('/reg')->controller(FormController::class)->group(function () {
    Route::get('/', 'Index');
    Route::post('/', 'register');
    
    Route::get('view', 'view')->name('customer.view');
    Route::get('view/edit/{id}', 'edit')->name('customer.edit');
    Route::post('view/update/{id}', 'update')->name('customer.update');
    Route::get('view/delete/{id}', 'destroy')->name('customer.delete');
});

Route::get('/', [FormController::class, 'IndexHome']);

Route::get('/uploadfile', function () {
    return view('uploadfile');
});

Route::post('/uploadfile', [FileController::class, 'uploadFile']);





