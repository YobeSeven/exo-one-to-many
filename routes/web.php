<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// *----------------* //

Route::get("/" , [HomeController::class , "index"])->name("home.index");
Route::get("/postes" , [PostController::class , "index"])->name("postes.index");

//* FUNCTIONS 
Route::post('/store/postes' , [PostController::class , "store"])->name("postes.store");
Route::delete('/destroy/postes/{poste}' , [PostController::class , "destroy"])->name("postes.destroy");
Route::post('/store/comments/{poste}' , [CommentController::class , "store"])->name("comments.store");
Route::delete('/destroy/comments/{comment}' , [CommentController::class , "destroy"])->name("comments.destroy");