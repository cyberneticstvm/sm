<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GosController;
use App\Http\Controllers\NewsEventsController;
use App\Http\Controllers\WhatsNewController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DocumentController;
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
Route::get('/', [HelperController::class, 'home']);

Route::get('/admin/dash/', function () {
    return view('admin.dash');
});
Route::get('/admin/login/', function () {
    return view('admin.login');
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

Route::get('/admin/gos/create/', [GosController::class, 'create'])->name('admin.gos.create');
Route::post('/admin/gos/create/', [GosController::class, 'store'])->name('admin.gos.save');
Route::get('/admin/gos-list/', [GosController::class, 'index'])->name('admin.gos-list');
Route::get('/admin/gos/edit/{id}/', [GosController::class, 'edit'])->name('admin.gos.edit');
Route::put('/admin/gos/edit/{id}/', [GosController::class, 'update'])->name('admin.gos.update');
Route::delete('/admin/gos/delete/{id}/', [GosController::class, 'destroy'])->name('admin.gos.delete');

Route::get('/admin/news-events/create/', [NewsEventsController::class, 'create'])->name('admin.news-events.create');
Route::post('/admin/news-events/create/', [NewsEventsController::class, 'store'])->name('admin.news-events.save');
Route::get('/admin/news-events-list/', [NewsEventsController::class, 'index'])->name('admin.news-events-list');
Route::get('/admin/news-events/edit/{id}/', [NewsEventsController::class, 'edit'])->name('admin.news-events.edit');
Route::put('/admin/news-events/edit/{id}/', [NewsEventsController::class, 'update'])->name('admin.news-events.update');
Route::delete('/admin/news-events/delete/{id}/', [NewsEventsController::class, 'destroy'])->name('admin.news-events.delete');

Route::get('/admin/whats-new/create/', [WhatsNewController::class, 'create'])->name('admin.whats-new.create');
Route::post('/admin/whats-new/create/', [WhatsNewController::class, 'store'])->name('admin.whats-new.save');
Route::get('/admin/whats-new-list/', [WhatsNewController::class, 'index'])->name('admin.whats-new-list');
Route::get('/admin/whats-new/edit/{id}/', [WhatsNewController::class, 'edit'])->name('admin.whats-new.edit');
Route::put('/admin/whats-new/edit/{id}/', [WhatsNewController::class, 'update'])->name('admin.whats-new.update');
Route::delete('/admin/whats-new/delete/{id}/', [WhatsNewController::class, 'destroy'])->name('admin.whats-new.delete');

Route::get('/admin/album/create/', [AlbumController::class, 'create'])->name('admin.album.create');
Route::post('/admin/album/create/', [AlbumController::class, 'store'])->name('admin.album.save');
Route::get('/admin/album-list/', [AlbumController::class, 'index'])->name('admin.album-list');
Route::get('/admin/album/edit/{id}/', [AlbumController::class, 'edit'])->name('admin.album.edit');
Route::put('/admin/album/edit/{id}/', [AlbumController::class, 'update'])->name('admin.album.update');
Route::delete('/admin/album/delete/{id}/', [AlbumController::class, 'destroy'])->name('admin.album.delete');

Route::get('/admin/video/create/', [VideoController::class, 'create'])->name('admin.video.create');
Route::post('/admin/video/create/', [VideoController::class, 'store'])->name('admin.video.save');
Route::get('/admin/video-list/', [VideoController::class, 'index'])->name('admin.video-list');
Route::get('/admin/video/edit/{id}/', [VideoController::class, 'edit'])->name('admin.video.edit');
Route::put('/admin/video/edit/{id}/', [VideoController::class, 'update'])->name('admin.video.update');
Route::delete('/admin/video/delete/{id}/', [VideoController::class, 'destroy'])->name('admin.video.delete');

Route::get('/admin/document/create/', [DocumentController::class, 'create'])->name('admin.document.create');
Route::post('/admin/document/create/', [DocumentController::class, 'store'])->name('admin.document.save');
Route::get('/admin/document-list/', [DocumentController::class, 'index'])->name('admin.document-list');
Route::get('/admin/document/edit/{id}/', [DocumentController::class, 'edit'])->name('admin.document.edit');
Route::put('/admin/document/edit/{id}/', [DocumentController::class, 'update'])->name('admin.document.update');
Route::delete('/admin/document/delete/{id}/', [DocumentController::class, 'destroy'])->name('admin.document.delete');

Route::get('/admin/file/upload/', [HelperController::class, 'listUpload'])->name('admin.listUpload');
Route::post('/admin/file/upload/', [HelperController::class, 'fileUpload'])->name('admin.fileUpload');
Route::delete('/admin/file/delete/{id}/', [HelperController::class, 'deleteFile'])->name('admin.file.delete');

Route::get('/web/{slug}/', [HelperController::class, 'index']);
Route::get('/government-orders/', [HelperController::class, 'gorder']);
Route::get('/photo-gallery/', [HelperController::class, 'photogallery']);
Route::get('/see-all-news-and-events/', [HelperController::class, 'seeallnews']);
Route::get('/see-all-whats-new/', [HelperController::class, 'seeallwhatsnew']);
Route::get('/news-and-events/{id}/', [HelperController::class, 'singlenews']);
Route::post('/tinymce/upload/', [HelperController::class, 'upload'])->name('upp');
Route::get('/tinymce/upload/', [HelperController::class, 'browse'])->name('browse');

Route::post('/admin/delete/{id}/{type}/', [HelperController::class, 'delete']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});