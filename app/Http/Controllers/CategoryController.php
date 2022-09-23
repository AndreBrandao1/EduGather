<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    /**
     * @return all the categories with thier related tags
     */
    public function get_categories()
    {
        $categories = DB::select(DB::raw(
            "SELECT CT.category_id AS cat_id, C.cat_title, C.cat_description, C.cat_logo, T.id AS tag_id, T.tag_title, T.tag_description, T.tag_logo
            FROM tags as T
            LEFT JOIN category_tag AS CT ON T.id = CT.tag_id
            LEFT JOIN categories AS C ON C.id = CT.category_id"
        ));
        $tags_by_category = (object)[];
        foreach ($categories as $entery) {
            $cat_id = $entery->{'cat_id'};
            $tags = array(
                "tag_id" => $entery->{"tag_id"},
                "tag_title" => $entery->{"tag_title"},
                "tag_description" => $entery->{"tag_description"},
                "tag_logo" => $entery->{"tag_logo"}
            );
            if (!isset($tags_by_category->{$cat_id})) {
                $tags_by_category->{$cat_id} = array();
            }
            $tags_by_category->{$cat_id} = $tags;
        }
        $categoryisf = DB::select(DB::raw(
            " SELECT C.id AS cat_id, C.cat_title, C.cat_description, C.cat_logo
	FROM  categories AS C"
        ));
        foreach ($categoryisf as $cat) {
            $cat_id = $cat->{'cat_id'};
            $cat->{'tags'} = $tags_by_category->{$cat_id} ?? [];
        }

        return response()->json($categoryisf);
    }

    /**
     * @param $id of the category
     * @return all the tags of a spesific category
     */
    public function get_category_tags($id)
    {
        $tags = DB::select(DB::raw("SELECT T.id AS tag_id, T.tag_title AS tag_title, T.tag_logo AS tag_logo FROM category_tag AS CT
	INNER JOIN tags AS T ON CT.category_id = T.id
    WHERE CT.category_id = $id"));
        return response()->json($tags);
    }
}
