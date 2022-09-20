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



        //get the courses then sorte them according to the languages
        $courses = DB::select(DB::raw(
            "SELECT L.id AS lan_id, C.id AS cou_id, C.cou_title, C.cou_description, C.cou_logo,categories.id AS cat_id,categories.cat_title, categories.cat_logo, U.id AS user_id, U.first_name, U.last_name
            From courses AS C
                   LEFT JOIN language_course AS LC ON LC.course_id = C.id
                LEFT JOIN languages AS L ON LC.language_id = L.id
                LEFT JOIN categories ON C.cat_id = categories.id
                LEFT JOIN users AS U ON U.id = C.user_id"
        ));


        $courses_by_lan = (object)[];
        foreach ($courses as $entry) {
            $lan_id = $entry->{'cou_id'};
            $course = array(
                'cou_id' => $entry->{'cou_id'},
                'cou_title' => $entry->{'cou_title'},
                'cou_description' => $entry->{'cou_description'},
                'cou_logo' => $entry->{'cou_logo'},
                'cat_id' => $entry->{'cat_id'},
                'cat_title' => $entry->{'cat_title'},
                'cat_logo' => $entry->{'cat_logo'},
                'user_id' => $entry->{'user_id'},
                'user_first_name' => $entry->{'first_name'},
                'user_last_name' => $entry->{'last_name'},
                'tags' => $tags_by_course->{$course_id}
            );
            if (!isset($courses_by_lan->{$lan_id})) {
                $courses_by_lan->{$lan_id} = array();
            }
            $courses_by_lan->{$lan_id}[] = $course;
        }



        $languages = DB::select(DB::raw(
            "SELECT languages.id, lan_title, lan_description, lan_logo
            From languages
            LEFT JOIN language_course AS LC ON LC.language_id = languages.id
            "
        ));
        foreach ($languages as $lan) {
            $lan_id = $lan->{'id'};
            $lan->{'courses'} = $courses_by_lan;
        }
        return response()->json($languages);
    }
}
