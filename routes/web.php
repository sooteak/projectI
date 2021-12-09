<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('first');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/notification', function () {
    return view('notification');
});
Route::get('/password', function () {
    return view('password');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/download', function () {
    return view('download');
});
Route::get('/huayuan', function () {
    return view('huayuan');
});
Route::get('/studenthostel', function () {
    return view('studenthostel');
});
Route::get('/ganen', function () {
    return view('ganen');
});
Route::get('/hall', function () {
    return view('hall');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/recordaward', function () {
    return view('recordaward');
});
Route::get('/show_award', function () {
    return view('show_award');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/club/view', 'App\Http\Controllers\ViewController@viewClub');
Route::get('/course/view', 'App\Http\Controllers\ViewController@viewCourse');
Route::get('/faculty/view', 'App\Http\Controllers\ViewController@viewFaculty');


Auth::routes();
Route::resource('posts','App\Http\Controllers\PostController');




// Route::resource('user_club', 'App\Http\Controllers\UserController@view');
// Route::view('dashboard', 'admin.dashboard');
Route::resource('courses', 'App\Http\Controllers\CourseController');
Route::resource('faculties', 'App\Http\Controllers\FacultyController');
Route::resource('clubs', 'App\Http\Controllers\ClubController');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user login
Route::get('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
//admin login
Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});

	Route::group(['middleware' => 'admin.auth'], function(){


        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::resource('courses', 'App\Http\Controllers\CourseController');
        Route::resource('faculties', 'App\Http\Controllers\FacultyController');
        Route::resource('clubs', 'App\Http\Controllers\ClubController');

        // Route::resource('/dashboard', 'App\Http\Controllers\AdminController');
        //admin logout
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});
});
