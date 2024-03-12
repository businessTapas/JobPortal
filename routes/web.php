<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\JobController;  
use App\Http\Controllers\UserDashboardController;

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

// x--------------------------------login Controller -------------------------------------------------------------x
Route::get('/',[UserDashboardController::class,'index'])->name('wellcome');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/logged/in',[LoginController::class,'logged'])->name('logged');
Route::get('/logout',[LoginController::class,'adminlogout'])->name('logout');
//Route::get('register',[LoginController::class,'register'])->name('signup');
//Route::post('/post_register',[LoginController::class,'post_register'])->name('post.signup');
//-------------------------------------------------------------------------================
Route::middleware(['adminlogin:1'])->group(function () {

Route::get('/admin-dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dash');
// x---------------------------------Property Controller ---------------------------------------------------------x
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
Route::get('/admin/job/{id}/show',[JobController::class,'show'])->name('job.show');
Route::post('/admin/job/add',[JobController::class,'store'])->name('job.add');
Route::get('/admin/job/{id}/edit',[JobController::class,'edit'])->name('job.edit');
Route::post('/admin/job/{id}/update',[JobController::class,'update'])->name('job.update');
Route::delete('/admin/job/delete/{id}',[JobController::class,'destroy'])->name('job.delete');

});

/* Route::group(['middleware' => ['any:adminlogin,userlogin']], function() {   // for both user access
    // Route::get('/job-list', [JobController::class, 'index'])->name('job.index');
    // Route::get('/admin/job/{id}/show',[JobController::class,'show'])->name('job.show');
}); */

