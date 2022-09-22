<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TagController extends Controller
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
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }


    /**
     * @return all the tags
     */
    public function get_tags()
    {
        return response()->json(Tag::all());
    }




    /**
     * @return all the tags and their related data
     */
    public function get_tags_courses()
    {
        // get the tags
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

        //get the languages
        $D_languages = DB::select(DB::raw("SELECT courses.id AS course_id, languages.id AS language_id, languages.lan_title
        FROM languages
        LEFT JOIN language_course ON languages.id=language_course.language_id
        LEFT JOIN courses ON courses.id=language_course.course_id"));
        $languages_by_course = (object)[];
        foreach ($D_languages as $entry) {
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



        //get the courses then sorte them according to the tags
        $courses = DB::select(DB::raw(
            "SELECT CT.tag_id, C.id AS cou_id, C.cou_title, C.cou_description, C.cou_logo,categories.id AS cat_id,categories.cat_title, categories.cat_logo, U.id AS user_id, U.first_name, U.last_name
            From courses AS C
                   LEFT JOIN course_tag AS CT ON CT.course_id = C.id
                LEFT JOIN categories ON C.cat_id = categories.id
                LEFT JOIN users AS U ON U.id = C.user_id"
        ));


        $courses_by_tag = (object)[];
        foreach ($courses as $entry) {
            $tag_id = $entry->{'tag_id'};
            $course_id = $entry->{'cou_id'};
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
                'tags' => $tags_by_course->{$course_id} ?? [],
                'languages' => $languages_by_course->{$course_id} ?? []
            );
            if (!isset($courses_by_tag->{$tag_id})) {
                $courses_by_tag->{$tag_id} = (object)[];
            }
            $courses_by_tag->{$tag_id}->{$course_id} = $course;
        }
        $final_courses_by_tag = (object)[];
        foreach ($courses_by_tag as $tag_id => $courses_f) {
            $new_courses = [];
            foreach ($courses_f as $cou_id => $course) {
                $new_courses[] = $course;
            }
            $final_courses_by_tag->{$tag_id} = $new_courses;
        }



        $tags = DB::select(DB::raw(
            "SELECT tags.id, tag_title, tag_description, tag_logo
    From tags
    "
        ));
        foreach ($tags as $tag) {
            $tag_id = $tag->{'id'};
            $tag->{'courses'} = $final_courses_by_tag->{$tag_id}  ?? [];
        }
        return response()->json($tags);
    }
}
