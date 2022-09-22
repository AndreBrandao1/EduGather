<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Database\Factories\CourseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Models\Course;
use App\Models\Course as ModelsCourse;

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

# do not use this one:: you can use the one mentioned below :: /categories which will retrive all the data of the categories and the related tags
Route::get('/categories/{id}', [CategoryController::class, 'get_categoy_tags']);

#Route::get('/tags', [CourseController::class, 'index']);
Route::get('/coursesIN', [CourseController::class, 'serve_courses']);








/**
 * @Working Routes
 */
## Routes for the courses:
# Route to get all the courses with their related data:
Route::get('/courses', [CourseController::class, 'get_all']);
# Route to get a specific course with its related data:
Route::get('/course/{id}', [CourseController::class, 'show']);
# Route to insert a new course:
Route::post('insert_course', [CourseController::class, 'store']);
#Route to edite a course:


## Routes for the categories
#Route for the categories and their related Tags:
Route::get('/categories', [CategoryController::class, 'get_categories']);
#Route for the categories and their related data including the courses and the courses' data


## Routes for the Tags
# Route that get the all data from Tags table (((only)))
Route::get('/tags', [TagController::class, 'get_tags']);



## Routes for the languages:
# get all the languages and the related courses and their related data.
Route::get('/languages', [LanguageController::class, 'get_all']);


##Routes for the <users>
# Route to get the courses of a trainer
Route::get('/trainer/{id}', [UserController::class, 'get_courses']);
