<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    # (DB::table('courses')    ->join('users', 'users.id', '=', 'courses.user_id')    ->select('users.role', 'users.id', 'courses,user_id')    ->where([['courses.user_id', '$trainer_id'], ['users.role', 'trainer']])    ->count()    ) > 0



    /**
     * Display a listing of the courses which are done by a specific trainer which is a user.
     *
     * @param $trainer_id
     * @return \Illuminate\Http\Response
     */
    public function get_courses($trainer_id)
    {
        $courses = (object)[];
        $tags_by_course = (object)[];
        $languages_by_course = (object)[];

        $check_user = User::find($trainer_id);
        if ($check_user) {
            $tags = DB::select(DB::raw("SELECT courses.id AS course_id, tags.id AS tag_id, tags.tag_title,tags.tag_description, tags.tag_logo, users.id As user_id, users.first_name, users.last_name
        FROM tags
        LEFT JOIN course_tag ON tags.id=course_tag.tag_id
        LEFT JOIN courses ON courses.id=course_tag.course_id
        LEFT JOIN users On courses.user_id = users.id
        WHERE users.id = $trainer_id"));
            $tags_by_course = (object)[];
            foreach ($tags as $entry) {
                $course_id = $entry->{'course_id'};
                $tag = array(
                    "tag_id" => $entry->{'tag_id'},
                    "tag_title" => $entry->{'tag_title'},
                    "tag_description" => $entry->{'tag_description'},
                    "tag_logo" => $entry->{'tag_logo'}
                );
                if (!isset($tags_by_course->{$course_id})) {
                    $tags_by_course->{$course_id} = array();
                }
                $tags_by_course->{$course_id}[] = $tag;


                $languages = DB::select(DB::raw("SELECT courses.id AS course_id, languages.id AS language_id, languages.lan_title, lan_logo, users.id
            FROM languages
            LEFT JOIN language_course ON languages.id=language_course.language_id
            LEFT JOIN courses ON courses.id=language_course.course_id
			LEFT JOIN users On courses.user_id = users.id
			WHERE users.id = $trainer_id"));
                $languages_by_course = (object)[];
                foreach ($languages as $entry) {
                    $course_id = $entry->{'course_id'};
                    $language = array(
                        "lan_id" => $entry->{'language_id'},
                        "lan_title" => $entry->{'lan_title'},
                        "lan_logo" => $entry->{'lan_logo'},
                    );
                    if (!isset($languages_by_course->{$course_id})) {
                        $languages_by_course->{$course_id} = array();
                    }
                    $languages_by_course->{$course_id}[] = $language;
                };
                $course = (object)[];
                $courses = DB::select(DB::raw("SELECT courses.id, cou_logo, cou_statue, cou_description, users.id AS user_id, users.first_name, users.last_name, categories.id AS cat_id, categories.cat_title 
            FROM courses 
            LEFT JOIN users ON courses.user_id = users.id
            LEFT JOIN categories ON courses.cat_id = categories.id
            WHERE users.id = $trainer_id"));
                foreach ($courses as $course) {
                    $course_id = $course->{'id'};
                    $course->{'languages'} = array();
                    if (isset($languages_by_course->{$course_id})) {
                        $course->{'languages'} = $languages_by_course->{$course_id};
                    }
                    $course->{'tags'} = array();
                    if (isset($tags_by_course->{$course_id})) {
                        $course->{'tags'} = $tags_by_course->{$course_id};
                    }
                }
            };


            return response()->json($courses);
        } else  $courses = [];
        return response()->json($courses);
    }



    /**
     * @return all trainers and their status for the admin
     */
    public function get_users_admin($role, $status)
    {
        $users = [];
        $users =  DB::select(DB::raw("SELECT * FROM users AS U WHERE U.role = '$role' AND U.status = '$status'"));
        return response()->json($users);
    }


    public function get_one_user($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * @param trainer_id, $new_status
     */
    public function aprove_trainer($trainer_id, $new_status)
    {
        $msg = "allowed status are verified, rejected, on_hold";
        if (($new_status == 'aproved') || ($new_status == 'rejected') || ($new_status == 'on_hold')) {
            DB::select(DB::raw("UPDATE users SET status = '$new_status' WHERE users.id = '$trainer_id'"));
            $msg = "trainer: $trainer_id status is updated to $new_status";
        }
        return response($msg);
    }

}
