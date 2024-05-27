<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrganisationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index'])->name('home');
Route::get('/search', [ContactController::class,'search'])->name('search');

Route::post('/store',[OrganisationController::class,'store']);
Route::post('/conformStore',[OrganisationController::class,'conformStore']);
Route::get('/resetError',[OrganisationController::class,'resetError']);

Route::get('/show/{id}',[OrganisationController::class,'show']);

Route::get('/edit/{id}',[OrganisationController::class,'edit']);
Route::put('/update/{id}',[OrganisationController::class,'update']);


Route::delete('/delete/{id}',[OrganisationController::class,'delete']);
Route::delete('/destroy/{id}',[OrganisationController::class,'destroy']);