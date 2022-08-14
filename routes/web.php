<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
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

Route::get('/admin/menu/create/', [MenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu/create/', [MenuController::class, 'store'])->name('admin.menu.save');
Route::get('/admin/menu-list/', [PageController::class, 'index'])->name('admin.menu-list');

Route::get('/web/{slug}/', [HelperController::class, 'index']);
Route::post('/tinymce/upload/', [HelperController::class, 'upload']);
