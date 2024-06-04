<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/reg',[formController::class,'Index']);

Route::post('/reg',[formController::class,'register']);

Route::get('reg/view', [formController::class, 'view']);

Route::get('reg/view/edit/{id}', [formController::class, 'edit'])->name('customer.edit');

Route::post('reg/view/update/{id}', [formController::class, 'update'])->name('customer.update');

Route::get('reg/view/delete/{id}', [formController::class, 'destroy'])->name('customer.delete');




