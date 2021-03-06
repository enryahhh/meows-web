<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\CatController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    Route::get('/post/mypost', [PostController::class, 'myPost']);
    Route::get('/article', [PostController::class, 'indexArticle']);
    Route::get('/article/search',[PostController::class, 'searchArticle']);
    Route::apiResources([
        'post' => PostController::class,
        'cat' => CatController::class,
    ]);

    Route::get('post/{id}/comments',[CommentController::class,'getComment']);
    Route::post('post/{id}/comment',[CommentController::class,'createComment']);
    
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return response()->json(["message" => "Email verification link sent on your email id"]);
    })->middleware(['throttle:6,1'])->name('verification.send');

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

// kalo berhasil verifikasi
Route::get('/email/verify/{id}/{hash}', function (Request $request) {
    $user = User::find($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            dd("email sudah terverifikasi");
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }


    return redirect('/success-verify');
})->name('verification.verify');

Route::get('/email/verify', function () {
        return response()->json(["msg" => "Email hasn't been verified"]);
    })->name('verification.notice');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
