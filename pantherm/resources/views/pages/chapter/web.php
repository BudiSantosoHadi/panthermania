<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BpoadminController;
use App\Http\Controllers\ChapteradminController;
use App\Http\Controllers\HistoryLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KorwiladminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NeedsController;
use App\Http\Controllers\NilaiMahasiswa;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductsadminController;
use App\Http\Controllers\ProductsController;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Embed\Embed;
use Illuminate\Support\Facades\App;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//route resource
// Route::resource('/posts', \App\Http\Controllers\PostController::class);

//route resource

// Route::resource('/posts', \App\Http\Controllers\PostController::class);

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'dashboard']);

Auth::routes([
    'register' => false,
]);

// profile settings
Route::get('/profiles', [HomeController::class, 'profile'])->name('profile');

// KORWIL-ADMIN-------------------------------------------------------------------------
Route::prefix('korwilAdmin')->middleware(['auth', 'isKorwil_Admin'])->group(function () {
    Route::get('/korwil', [KorwiladminController::class, 'index_korwil_Korwiladmin'])->name('korwilAdmin.index.korwil');
});

// CHAPTER-ADMIN-------------------------------------------------------------------------
Route::prefix('chapterAdmin')->middleware(['auth', 'isChapter_Admin'])->group(function () {

    Route::get('/chapter', [ChapteradminController::class, 'index_chapter'])->name('chapterAdmin.index.chapter');
    Route::get('/chaptercreate', [ChapteradminController::class, 'create_chapter'])->name('chapterAdmin.create.chapter');
    Route::post('/chapterstore', [ChapteradminController::class, 'store_chapter'])->name('chapterAdmin.store.chapter');
    Route::get('/editchapter/{id}', [ChapteradminController::class, 'edit_chapter'])->name('chapterAdmin.edit.chapter');
    Route::get('/showchapter/{id}', [ChapteradminController::class, 'show_chapter'])->name('chapterAdmin.show.chapter');
    Route::get('/deletechapter/{id}', [ChapteradminController::class, 'destroy_chapter'])->name('chapterAdmin.destroy.chapter');
    Route::post('/updatechapter/{id}', [ChapteradminController::class, 'update_chapter'])->name('chapterAdmin.update.chapter');
});

// BPO-ADMIN-----------------------------------------------------------------------------
Route::prefix('bpoAdmin')->middleware(['auth', 'isBpo_Admin'])->group(function () {
    Route::get('/bpo', [BpoadminController::class, 'index_bpo'])->name('bpoAdmin.index.bpo');
});

// Administrator-------------------------------------------------------------------------
Route::prefix('Admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/bpo', [AdminController::class, 'index_bpo_admin'])->name('Admin.index.bpo');
    Route::get('/add_bpo', [AdminController::class, 'add_bpo_admin'])->name('Admin.add.bpo');
    Route::get('/chapter', [AdminController::class, 'index_chapter_admin'])->name('Admin.index.chapter');
    Route::get('/chaptercreate', [AdminController::class, 'create_chapter_admin'])->name('Admin.create.chapter');
    Route::post('/chapterstore', [AdminController::class, 'store_chapter_admin'])->name('Admin.store.chapter');
    Route::get('/editchapter/{id}', [AdminController::class, 'edit_chapter_admin'])->name('Admin.edit.chapter');
    Route::get('/showchapter/{id}', [AdminController::class, 'show_chapter_admin'])->name('Admin.show.chapter');
    Route::get('/deletechapter/{id}', [AdminController::class, 'destroy_chapter_admin'])->name('Admin.destroy.chapter');
    Route::post('/updatechapter/{id}', [AdminController::class, 'update_chapter_admin'])->name('Admin.update.chapter');

    Route::get('/korwil', [AdminController::class, 'index_korwil_admin'])->name('Admin.index.korwil');
    Route::get('/korwilcreate', [AdminController::class, 'create_korwil_admin'])->name('Admin.create.korwil');
    Route::post('/korwilstore', [AdminController::class, 'store_korwil_admin'])->name('Admin.store.korwil');
    Route::get('/showkorwil/{id}', [AdminController::class, 'show_korwil_admin'])->name('Admin.show.korwil');
    Route::get('/editkorwil/{id}', [AdminController::class, 'edit_korwil_admin'])->name('Admin.edit.korwil');
    Route::post('/updatekorwil/{id}', [AdminController::class, 'update_korwil_admin'])->name('Admin.update.korwil');
    Route::get('/korwildelete/{id}', [AdminController::class, 'destroy_korwil_admin'])->name('Admin.destroy.korwil');

    Route::get('/member', [AdminController::class, 'index_member_admin'])->name('Admin.index.member');
    Route::get('/membercreate', [AdminController::class, 'create_member_admin'])->name('Admin.create.member');
    Route::get('/membersearch', [AdminController::class, 'search_member_admin'])->name('Admin.search.member');
    Route::get('/user', [AdminController::class, 'index_user_admin'])->name('Admin.index.users');
    Route::get('/usersearch', [AdminController::class, 'search_user_admin'])->name('Admin.search.user');
    Route::get('/products', [AdminController::class, 'index_products_admin'])->name('Admin.index.products');
    Route::get('/agendak', [AdminController::class, 'index_agendak_admin'])->name('Admin.index.agendak');
    Route::get('/grafik', [AdminController::class, 'grafik_perkembangan'])->name('Admin.grafik_p');
});