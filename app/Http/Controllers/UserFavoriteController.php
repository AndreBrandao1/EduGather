<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\DB;

class UserFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userfavorite = UserFavorite::all();
        return response()->json($userfavorite);
    }

    /**
     * Show the form for creating a new resource.
     *     * @return \Illuminate\Http\Response
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
        $userfavorite = UserFavorite::create([
            'course_id' => $request->course_id,
            'user_id' => $request->user_id
        ]);
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
        $userfavorite = UserFavorite::find($id);
        return response()->json($userfavorite);
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
    /**
     * creat a link that takes two inputes, $user_id, $course_id
     * 
     */

    public function creat_link($user_id, $course_id)
    {

        $favorite = DB::select(DB::raw("SELECT id FROM users_favorites WHERE course_id = $course_id AND user_id = $user_id"));
        if ($favorite) {
            $id = $favorite[0]->id;
            DB::select(DB::raw("DELETE FROM users_favorites Where users_favorites.id = $id"));
        } else {
            DB::select(DB::raw("INSERT INTO users_favorites (course_id, user_id) VALUES('$user_id','$course_id' )"));
        }
    }

}
