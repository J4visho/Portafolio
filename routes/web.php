<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\NewsController;


Route::get('/',[HomeController::class,'index'])->name('Inicio');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/portafolio',[ContentController::class,'index'])->name('portafolio');
Route::get('/contacto',[ContactController::class,'index'])->name('contacto');
Route::view('/messages/success', 'messages.success')->name('messages.success');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::resource('cruds', CrudController::class);
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
