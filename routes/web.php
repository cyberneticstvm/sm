<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HelperController;

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

Route::get('/', function () {
    return view('web.index');
});

Route::get('/admin/page/create/', [PageController::class, 'create'])->name('admin.create-page');
Route::post('/admin/page/create/', [PageController::class, 'store'])->name('admin.page.save');
Route::get('/admin/page-list/', [PageController::class, 'index'])->name('admin.page-list');
Route::get('/get-page-list/', [HelperController::class, 'getpagelist'])->name('get-page-list');
Route::get('/admin/page/edit/{id}/', [PageController::class, 'edit'])->name('admin.page.edit');
Route::put('/admin/page/edit/{id}/', [PageController::class, 'update'])->name('admin.page.update');
Route::delete('/admin/page/delete/{id}/', [PageController::class, 'destroy'])->name('admin.page.delete');

Route::get('/admin/menu/create/', [MenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu/create/', [MenuController::class, 'store'])->name('admin.menu.save');
Route::get('/admin/menu-list/', [MenuController::class, 'index'])->name('admin.menu-list');
Route::get('/admin/menu/edit/{id}/', [MenuController::class, 'edit'])->name('admin.menu.edit');
Route::put('/admin/menu/edit/{id}/', [MenuController::class, 'update'])->name('admin.menu.update');
Route::delete('/admin/menu/delete/{id}/', [MenuController::class, 'destroy'])->name('admin.menu.delete');

Route::get('/admin/slider/create/', [SliderController::class, 'create'])->name('admin.slider.create');
Route::post('/admin/slider/create/', [SliderController::class, 'store'])->name('admin.slider.save');
Route::get('/admin/slider-list/', [SliderController::class, 'index'])->name('admin.slider-list');
Route::get('/admin/slider/edit/{id}/', [SliderController::class, 'edit'])->name('admin.slider.edit');
Route::put('/admin/slider/edit/{id}/', [SliderController::class, 'update'])->name('admin.slider.update');
Route::delete('/admin/slider/delete/{id}/', [SliderController::class, 'destroy'])->name('admin.slider.delete');

Route::get('/web/{slug}/', [HelperController::class, 'index']);
Route::post('/tinymce/upload/', [HelperController::class, 'upload']);
