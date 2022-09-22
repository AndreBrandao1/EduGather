<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #DB::table('tags')
        ## ->join('course_tag', 'tags.id', '=', 'course_tag.tag_id')
        # ->join('courses', 'courses.id', '=', 'course_tag.course_id')
        # ->select('')
        $tags = DB::select(DB::raw(
            "SELECT courses.id AS course_id, tags.id AS tag_id, tags.tag_title, users.id As user_id, users.first_name, users.last_name
        FROM tags
        LEFT JOIN course_tag ON tags.id=course_tag.tag_id
        LEFT JOIN courses ON courses.id=course_tag.course_id
        LEFT JOIN users On courses.user_id = users.id"
        ));
        $tags_by_course = (object)[];
        foreach ($tags as $entry) {
            $course_id = $entry->{'course_id'};
            $tag = array(
                "tag_id" => $entry->{'tag_id'},
                "tag" => $entry->{'tag_title'}
            );
            if (!isset($tags_by_course->{$course_id})) {
                $tags_by_course->{$course_id} = array();
            }
            $tags_by_course->{$course_id}[] = $tag;
        }
        $languages = DB::select(DB::raw("SELECT courses.id AS course_id, languages.id AS language_id, languages.lan_title
            FROM languages
            LEFT JOIN language_course ON languages.id=language_course.language_id
            LEFT JOIN courses ON courses.id=language_course.course_id"));
        $languages_by_course = (object)[];
        foreach ($languages as $entry) {
            $course_id = $entry->{'course_id'};
            $language = array(
                "lan_id" => $entry->{'language_id'},
                "lan_title" => $entry->{'lan_title'},
            );
            if (!isset($languages_by_course->{$course_id})) {
                $languages_by_course->{$course_id} = array();
            }
            $languages_by_course->{$course_id}[] = $language;
        }

        $courses = DB::select(DB::raw("SELECT courses.id, courses.cou_title 
            FROM courses"));
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
        return response()->json($courses);

        #SELECT courses.id, languages.lan_title
        #FROM courses
        #    JOIN language_course ON language_course.course_id=courses.id
        #    JOIN languages ON languages.id=language_course.language_id
        #    return response()->json(Course::all());
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
        $user_id = auth()->user()->id;
        $course = Course::create([
            "cou_title" => $request->cou_title,
            "cou_description" => $request->cou_description,
            "cou_logo" => $request->cou_logo,
            "user_id" => $user_id,
            "cat_id" => $request->cat_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $cat_id = $course->cat_id;
        $category = Category::find($cat_id);
        $user_id = $course->user_id;
        $user = User::find($user_id);
        $tags = DB::table('tags')->join('course_tag', 'tags.id', '=', 'course_tag.tag_id')->select('tags.*')->where('course_tag.course_id', '=', $course->id)->get();
        $languages = DB::table('languages')->join('language_course', 'languages.id', '=', 'language_course.course_id')->select('languages.*')->where('language_course.course_id', '=', $course->id)->get();

        $data = ['course' => $course, "category" => $category, "user" => $user, 'tags' => $tags, 'languages' => $languages];

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $cou_id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cou_id)
    {
        $request->validate([
            'cou_title' => 'required|min:3|max:30',
            'cou_description' => 'required|min:3',

        ]);

        $course = Course::find($cou_id);

        $course->cou_title = $request->cou_title;
        $course->cou_description = $request->cou_description;
        
    }

    /** it does not work yet
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      

    }

    /**
     * 
     * get all the courses from the database with all their related data
     * @param no input required
     */
    public function get_all()
    {
        $tags = DB::select(DB::raw(
            "SELECT courses.id AS course_id, tags.id AS tag_id, tags.tag_title, users.id As user_id, users.first_name, users.last_name
        FROM tags
        LEFT JOIN course_tag ON tags.id=course_tag.tag_id
        LEFT JOIN courses ON courses.id=course_tag.course_id
        LEFT JOIN users On courses.user_id = users.id"
        ));
        $tags_by_course = (object)[];
        foreach ($tags as $entry) {
            $course_id = $entry->{'course_id'};
            $tag = array(
                "tag_id" => $entry->{'tag_id'},
                "tag_title" => $entry->{'tag_title'}
            );
            if (!isset($tags_by_course->{$course_id})) {
                $tags_by_course->{$course_id} = array();
            }
            $tags_by_course->{$course_id}[] = $tag;
        }
        $languages = DB::select(DB::raw("SELECT courses.id AS course_id, languages.id AS language_id, languages.lan_title, lan_logo
            FROM languages
            LEFT JOIN language_course ON languages.id=language_course.language_id
            LEFT JOIN courses ON courses.id=language_course.course_id"));
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
        }


        $courses = DB::select(DB::raw("SELECT courses.id, cou_logo, cou_statue, cou_description, users.id AS user_id, users.first_name, users.last_name, categories.id AS cat_id, categories.cat_title 
            FROM courses 
            LEFT JOIN users ON courses.user_id = users.id
            LEFT JOIN categories ON courses.cat_id = categories.id"));
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
        return response()->json($courses);
    }




    ## not working
    public function serve_courses()
    {
        $data = DB::select(DB::raw("
        SELECT 
TCRS.*,
LCRS.*,
CRS.cou_title as \"cou_title\",
CRS.cou_description as \"cou_description\",
CRS.cou_logo as \"cou_logo\",
CRS.user_id as \"user_id\",
USR.first_name as \"first_name\",
USR.last_name as \"last_name\",
CATA.id as \"cat_id\",
CATA.cat_title as \"cat_title\",
CATA.cat_description as \"cat_description\",
CATA.cat_logo as \"cat_logo\"


	FROM (SELECT
	TAG.id as \"tag_id\",
    TAG.tag_title as \"tag_title\",
    TAG.tag_logo as \"tag_logo\",
    TAG.tag_description as \"tag_description\",
    CT.course_id as \"course_id\"
	FROM tags AS TAG
		LEFT JOIN course_tag AS CT ON TAG.id = CT.tag_id) AS TCRS
    LEFT JOIN (SELECT
	LAN.id as \"lan_id\",
    LAN.lan_title as \"lan_title\",
    LAN.lan_logo as \"lan_logo\",
    LAN.lan_description as \"lan_description\",
    LN.course_id as \"course_id\"
	FROM languages AS LAN
		LEFT JOIN language_course AS LN ON LAN.id = LN.language_id) AS LCRS ON TCRS.course_id= LCRS.course_id
        LEFT JOIN courses AS CRS ON CRS.id = TCRS.course_id
        LEFT JOIN users AS USR ON USR.id = CRS.user_id
        LEFT JOIN categories AS CATA ON CATA.id = CRS.cat_id
        "));;
        return response()->json($data);
    }


}
