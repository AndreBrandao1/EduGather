<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Database\Factories\CourseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Models\Course;

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

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search', [CourseController::class, 'index']);
Route::get('/getUser', function () {
    $userId = Auth::id();
    return $userId;
});
Route::get('/tags', [TagController::class, 'get_tags']);
Route::get('/categories', [CategoryController::class, 'get_categories']);
Route::get('/categories/{id}', [CategoryController::class, 'get_categoy_tags']);
Route::get('/trainer/{id}', [UserController::class, 'get_courses']);
Route::get('/course/{id}', [CourseController::class, 'show']);

Route::get('/tags', [CourseController::class, 'index']);
Route::get('/courses', [CourseController::class, 'get_all']);
Route::post('insert_course', [CourseController::class, 'store']);
