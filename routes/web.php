<?php

use App\Http\Controllers\UploadIm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Storage::disk('mostafa')->put('test.txt', 'welcome');
    return 'ok';
});
Route::get('show', [UploadIm::class,'showForm']);
Route::get('show_image',[UploadIm::class,'images']);
Route::post('store', [UploadIm::class,'store'])->name('photo.save');
