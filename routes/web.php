<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::get('/register', function () {
//     return view('auth.register');
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('admin', function () {
//         return view ('admin.index');
//     });
// });
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin');
 
//     //semua route dalam grup ini hanya bisa diakses oleh operator
// });


Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'authenticate'])->name('login/auth');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register/store',[RegisterController::class,'store'])->name('register/store');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Route::get('/dashboard',[DashboardController::class,'index'])->name('home');
Route::get('/homepage',[HomeController::class,'homepage']);
Route::get('/home',[HomeController::class,'index'])->middleware('auth');
// Route::get('/dashboard',[DashboardController::class,'indexadmin'])->name('home.admin');
// Route::get('/admin',[AdminController::class,'index'])->name('adminpage');
Route::get('/loker',[LokerController::class,'index'])->name('loker');

Route::get('/datauser',[DataUserController::class,'index'])->name('datauser.index');
// Route::get('/datauser',[DashboardController::class,'show'])->name('data_user.index');
Route::get('/datauser.create',[DataUserController::class,'create'])->name('datauser.create');
Route::post('/datauser.store',[DataUserController::class,'store'])->name('datauser.store');

Route::get('/userinfo',[AdminDashController::class,'index'])->name('userinfo.admin');

Route::get('/admin',[AdminController::class,'index'])->middleware(['auth','admin']);
Route::get('/post_page',[AdminController::class,'post_page']);
Route::post('/add_post',[AdminController::class,'add_post']);
Route::get('/show_post',[AdminController::class,'show_post']);
Route::get('/delete_post/{id}',[AdminController::class,'delete_post']);
Route::get('/edit_post/{id}',[AdminController::class,'edit_post']);
Route::post('/update_post/{id}',[AdminController::class,'update_post']);
Route::get('/accept_post/{id}',[AdminController::class,'accept_post']);
Route::get('/reject_post/{id}',[AdminController::class,'reject_post']);


Route::get('/data_diri',[HomeController::class,'data_diri']);
Route::get('/tambah_data_diri',[HomeController::class,'tambah_data_diri']);
Route::post('/buat_data_diri',[HomeController::class,'buat_data_diri']);


Route::get('/user',[UserController::class,'index']);
Route::get('/landing_page',[UserController::class,'landing_page']);
Route::get('/detail_post/{id}',[UserController::class,'detail_post']);
Route::get('/data_diri',[UserController::class,'data_diri']);
Route::get('/data_diri_add',[UserController::class,'data_diri_add']);
Route::post('/data_diri_create',[UserController::class,'data_diri_create']);




Route::get('/post_detail/{id}',[HomeController::class,'post_detail']);
Route::get('/create_post',[HomeController::class,'create_post']);
Route::post('/user_post',[HomeController::class,'user_post']);
Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth');
Route::get('/my_post_del/{id}',[HomeController::class,'my_post_del'])->middleware('auth');
Route::get('/post_update_page/{id}',[HomeController::class,'post_update_page'])->middleware('auth');
Route::post('/update_post_data/{id}',[HomeController::class,'update_post_data'])->middleware('auth');

