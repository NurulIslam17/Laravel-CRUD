<?php

use App\Http\Controllers\userControl;
use Illuminate\Support\Facades\Route;


Route::get('/',[userControl::class,'display']);
Route::get('/addInfo',[userControl::class,'addInfo']);

// Add data
Route::post('add_student',[userControl::class,'add_student']);

//Delete Info 
Route::get('delete/{id}',[userControl::class,'deleteData']);

//Edit
Route::get('/edit/{id}',[userControl::class,'edit']);

// Update
Route::post('update_student/{id}',[userControl::class,'update']);