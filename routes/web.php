<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\PostAdminController;

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

Route::get('/index', function () {
    return view('user.index');
});

Route::get('/user-login', function () {
    return view('user.login');
});

Route::get('/user-register', function () {
    return view('user.register');
});

Route::get('/homepage', function () {
    return view('user.homepage');
});

Auth::routes();
Route::get('/success-verify',function(){
    return view('success-verify');
});
Route::get('/form-post',function(){
   return view('create-post'); 
})->middleware('auth');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::resource('post-admin',PostAdminController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


