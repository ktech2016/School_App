<?php
use App\Http\Controllers\AuthenticatedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\AssignClassController;
use App\Http\Controllers\JuniorSubjectController;
use App\Http\Controllers\SeniorSubjectController;
use App\Http\Controllers\ResultController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', [AuthenticatedController::class, 'index'])->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->Route::get('dashboard',[AuthenticatedController::class, 'index'])->name('dashboard');
Route::get('/view_teachers',[AuthenticatedController::class, 'showteachers'])->name('view_teachers');
Route::get('/view_students',[AuthenticatedController::class, 'showstudents'])->name('view_students');
Route::get('/admin/profile',[AuthenticatedController::class, 'profile'])->name('profile');
Route::get('/admin/profile/edit',[AuthenticatedController::class, 'edit'])->name('editprofile');
Route::patch('/admin/profile/update',[AuthenticatedController::class, 'update'])->name('updateprofile');
Route::get('/admin/profile/change_password',[AuthenticatedController::class, 'changepassword'])->name('changepassword');
Route::get('/admin/logout',[AuthenticatedController::class, 'logout'])->name('logout');
Route::post('/admin/profile/update_password',[AuthenticatedController::class, 'updatepassword'])->name('updatepassword');
Route::get('/result/add_result',[ResultController::class, 'add_results'])->name('add_results');
Route::post('/result/store_result',[ResultController::class, 'store_results'])->name('store_results');


Route::prefix('admin')->group(function (){
    Route::resource('student',StudentController::class);
    Route::resource('teacher',TeacherController::class);
    Route::resource('class',ClassController::class);
    Route::resource('junior_subject',JuniorSubjectController::class);
    Route::resource('senior_subject',SeniorSubjectController::class);   
    Route::post('assignclass', [AssignClassController::class, 'store'])->name('assignclass');
});