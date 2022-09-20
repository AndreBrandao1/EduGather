<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
    }


    /**
     * 
     * get all the languages from the database with all their related data
     * @param no input required
     */
    public function get_all()
    {

        $courses_by_lan = (object)[];
        $courses = DB::select(DB::raw(
            "SELECT L.id AS lan_id, C.id AS cou_id, C.cou_title, C.cou_description, C.cou_logo,categories.id,categories.cat_title, categories.cat_logo, U.id AS user_id, U.first_name, U.last_name
            From courses AS C
                   LEFT JOIN language_course AS LC ON LC.course_id = C.id
                LEFT JOIN languages AS L ON LC.language_id = L.id
                LEFT JOIN categories ON C.cat_id = categories.id
                LEFT JOIN users AS U ON U.id = C.user_id"
        ));
        foreach ($courses as $entry) {
            $course_id = $entry->{'course_id'};
            $course = array(
                "tag_id" => $entry->{'tag_id'},
                "tag-title" => $entry->{'tag_title'}
            );
            if (!isset($courses_by_lan->{$course_id})) {
                $courses_by_lan->{$course_id} = array();
            }
            $courses_by_lan->{$course_id}[] = $course;
        }



        $languages = DB::select(DB::raw(
            "SELECT languages.id, lan_title, lan_description, lan_logo
            From languages
            LEFT JOIN language_course AS LC ON LC.language_id = languages.id
            "
        ));
        return response()->json($languages);
    }



    public function saving()
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
                "tag-title" => $entry->{'tag_title'}
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


        $courses = DB::select(DB::raw("SELECT courses.id, cou_logo, cou_statue, users.id AS user_id, users.first_name, users.last_name, categories.id AS cat_id, categories.cat_title 
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
    }
}
