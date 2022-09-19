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
        return response()->json(Course::all());
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
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
