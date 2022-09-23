<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryTagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseTagController;
use App\Http\Controllers\LanguageCourseController;
use App\Http\Controllers\UserFavoriteController;

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

# Route to insert a new course-tag ids
Route::post('/insertcoursetag/{course_id}/{tag_id}', [CourseTagController::class, 'store']);


# Route to insert a new language-course id
Route::post('/insertlangcourse/{language_id}/{course_id}', [LanguageCourseController::class, 'store']);



Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/search', [CourseController::class, 'index']);
Route::get('/getUser', function () {
    $userId = Auth::id();
    return $userId;
});



# do not use this one:: you can use the one mentioned below :: /categories which will retrive all the data of the categories and the related tags
Route::get('/categories/{id}', [CategoryController::class, 'get_category_tags']);




## testing APIs
Route::get('testapi/{status}', [CourseController::class, 'get_onhold_courses']);

Route::get('testapi/{user_id}/{course_id}', [UserFavoriteController::class, 'creat_link']);









/*Route::get('/langcourse{id}', [LanguageCourseController::class, 'get_lang_course']);

Route::get('/userfavorite{id}', [UserFavoriteController::class, 'get_']); */



/**
 * @Working Routes
 */

## Routes for the courses:
# Route to get all the courses with their related data:
Route::get('/courses', [CourseController::class, 'get_all']);
# Route to get a specific course with its related data:
Route::get('/courses/{id}', [CourseController::class, 'show']);
# Route to insert a new course:
Route::post('insert_course', [CourseController::class, 'store']);
#test this api it will take a request that need a @param: cou_title, cou_description
Route::post('/update_course/{$id}', [CourseController::class, 'update']);
#delete a course with all the related data from the intermediate tables
Route::post('/delete_course/{id}', [CourseController::class, 'destroy']);


## Routes for the categories
#Route for the categories and their related Tags:
Route::get('/categories', [CategoryController::class, 'get_categories']);
#Route for the categories and their related data including the courses and the courses' data
Route::get('/categories_courses', [CategoryController::class, 'get_categories_courses']);
# Route to insert a new category-tag id
Route::get('/insertcattag/{category_id}/{tag_id}', [CategoryTagController::class, 'store']);
## get courses by a single category, ((all)) the data of the courses are included
Route::get('/cat_courses/{cat_id}', [CategoryController::class, 'get_courses']);


## Routes for the Tags
# Route that get the all data from Tags table (((only)))
Route::get('/tags', [TagController::class, 'get_tags']);
# tags with their courses
Route::get('/tags_courses', [TagController::class, 'get_tags_courses']);
## get courses by a single tag, ((all)) the data of the courses are included
Route::get('/courses_tag/{tag_id}', [TagController::class, 'get_courses']);





## Routes for the languages:
# get the languages for the insert
Route::get('get_languages', [LanguageController::class, 'index']);

# get all the languages and the related courses and their related data.
Route::get('/languages', [LanguageController::class, 'get_all']);


##Routes for the <users>

# Route to get the courses of a trainer
Route::get('/trainer/{id}', [UserController::class, 'get_courses']);

#get the users for the ADMIN
Route::get('/get_users_admin/{role}/{status}', [UserController::class, 'get_users_admin']);

#Route to insert/delete a new user-favorite id takes two inputes ((course_id & user_id))
Route::post('/inser_favorit', [UserFavoriteController::class, 'creat_link']);

#the ADMIN APROVING COURSE it gives the courses based on the status (oh_hold, verified, denied)
Route::get('/user_courses/{status}', [CourseController::class, 'get_onhold_courses']);

#the ADMIN APROVING COURSE it gives the courses based on the status (oh_hold, verified, denied) for ((((a specific user))))
Route::get('/user_courses/{status}/{user_id}', [CourseController::class, 'get_onhold_courses_for_user']);

#admine aprove or deny or change the value of any course
Route::post('aprove_course/{course_id}/{new_status}', [CourseController::class, 'aprove_course']);

#admin change trainers's status for a spe trainer
Route::post('aprove_trainer/{trainer_id}/{new_status}', [UserController::class, 'aprove_trainer']);


##routes for realtionships

#creating a relationship or a contact between users and or user trainer
Route::post('start_relation/{sender}/{reciever}', [ContactController::class, 'start_relation']);

#getting the status to a specific relationship inputes are the two users IDs
Route::get('/get_contact_status/{sender}/{reciever}', [ContactController::class, 'get_contact_status']);

#changing the status of a relationship  requires three inputs: sender, reciever and $new_status
