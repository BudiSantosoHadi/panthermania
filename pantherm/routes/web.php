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
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

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


// profile settings
Route::get('/profiles', [HomeController::class, 'profile'])->name('profile');

// KORWIL-ADMIN-------------------------------------------------------------------------
Route::prefix('korwilAdmin')->middleware(['auth', 'isKorwil_Admin'])->group(function () {
    Route::get('/korwil', [KorwiladminController::class, 'index_korwil_korwilAdmin'])->name('korwilAdmin.index.korwil');
    Route::get('/korwilcreate', [KorwiladminController::class, 'create_korwil_korwilAdmin'])->name('korwilAdmin.create.korwil');
    Route::post('/korwilstore', [KorwiladminController::class, 'store_korwil_korwilAdmin'])->name('korwilAdmin.store.korwil');
    Route::get('/showkorwil/{id}', [KorwiladminController::class, 'show_korwil_korwilAdmin'])->name('korwilAdmin.show.korwil');
    Route::get('/editkorwil/{id}', [KorwiladminController::class, 'edit_korwil_korwilAdmin'])->name('korwilAdmin.edit.korwil');
    Route::post('/updatekorwil/{id}', [KorwiladminController::class, 'update_korwil_korwilAdmin'])->name('korwilAdmin.update.korwil');
    Route::get('/korwildelete/{id}', [KorwiladminController::class, 'destroy_korwil_korwilAdmin'])->name('korwilAdmin.destroy.korwil');
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
    Route::get('/Admin/bpoAdmin', [BpoadminController::class, 'index_bpo'])->name('bpoAdmin.index.bpo');
    Route::post('/storebpo', [BpoadminController::class, 'store_bpo'])->name('bpoAdmin.store.bpo');
    Route::get('/bpocreate', [BpoadminController::class, 'create_bpo'])->name('bpoAdmin.create.bpo');
    Route::post('/updatebpo/{id}', [BpoadminController::class, 'update_bpo'])->name('bpoAdmin.update.bpo');
    Route::get('/bpoedit/{id}', [BpoadminController::class, 'edit_bpo'])->name('bpoAdmin.edit.bpo');
});

// Administrator-------------------------------------------------------------------------
Route::prefix('Admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/Admin/bpo', [AdminController::class, 'index_bpo_admin'])->name('Admin.index.bpo');
    Route::post('/storebpo', [AdminController::class, 'store_bpo_admin'])->name('Admin.store.bpo');
    Route::get('/bpocreate', [AdminController::class, 'create_bpo_admin'])->name('Admin.create.bpo');
    Route::post('/updatebpo/{id}', [AdminController::class, 'update_bpo_admin'])->name('Admin.update.bpo');
    Route::get('/bpoedit/{id}', [AdminController::class, 'edit_bpo_admin'])->name('Admin.edit.bpo');

    // Route::get('/remove/{id}', [AdminController::class, 'remove_bpo_admin'])->name('Admin.destroy.bpo');

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
    Route::get('/memberedit/{id}', [AdminController::class, 'edit_member_admin'])->name('Admin.edit.member');
    Route::post('/memberupdate/{id}', [AdminController::class, 'update_member_admin'])->name('Admin.update.member');
    Route::get('/memberdelete/{id}', [AdminController::class, 'destroy_member_admin'])->name('Admin.destroy.member');
    Route::get('/membershow/{id}', [AdminController::class, 'show_member_admin'])->name('Admin.show.member');
    Route::get('/membersearch', [AdminController::class, 'search_member_admin'])->name('Admin.search.member');
    Route::get('/user', [AdminController::class, 'index_user_admin'])->name('Admin.index.users');
    Route::get('/useredit/{id}', [AdminController::class, 'edit_user_admin'])->name('Admin.edit.users');
    Route::get('/userupdate/{id}', [AdminController::class, 'update_user_admin'])->name('Admin.update.users');
    Route::get('/usersearch', [AdminController::class, 'search_user_admin'])->name('Admin.search.user');
    Route::get('/grafik', [AdminController::class, 'grafik_perkembangan'])->name('Admin.grafik_p');

    Route::get('/products', [AdminController::class, 'index_products_admin'])->name('Admin.index.products');
    Route::get('/productscreate', [AdminController::class, 'create_products_admin'])->name('Admin.create.products');
    Route::get('/showproducts/{id}', [AdminController::class, 'show_products_admin'])->name('Admin.show.products');
    Route::get('/editproducts/{id}', [AdminController::class, 'edit_products_admin'])->name('Admin.edit.products');
    Route::post('/updateproducts/{id}', [AdminController::class, 'update_products_admin'])->name('Admin.update.products');
    Route::get('/deleteproducts/{id}', [AdminController::class, 'destroy_products_admin'])->name('Admin.destroy.products');
    Route::post('/productsstore', [AdminController::class, 'store_products_admin'])->name('Admin.store.products');
    Route::get('/productssearch', [AdminController::class, 'search_products_admin'])->name('Admin.search.products');

    Route::get('/agendak', [AdminController::class, 'index_agendak_admin'])->name('Admin.index.agendak');
    Route::get('/agendakcreate', [AdminController::class, 'create_agendak_admin'])->name('Admin.create.agendak');
    Route::get('/agendakedit/{id}', [AdminController::class, 'edit_agendak_admin'])->name('Admin.edit.agendak');
    Route::get('/agendakshow/{id}', [AdminController::class, 'show_agendak_admin'])->name('Admin.show.agendak');
    Route::post('/agendakupdate/{id}', [AdminController::class, 'update_agendak_admin'])->name('Admin.update.agendak');
    Route::get('/agendakdelete/{id}', [AdminController::class, 'destroy_agendak_admin'])->name('Admin.destroy.agendak');
    Route::post('/agendakstore', [AdminController::class, 'store_agendak_admin'])->name('Admin.store.agendak');
    Route::get('/agendaksearch', [AdminController::class, 'search_agendak_admin'])->name('Admin.search.agendak');
});
Auth::routes();