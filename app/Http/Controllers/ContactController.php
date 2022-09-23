<?php

namespace App\Http\Controllers;


use App\Http\Models\User;
use App\Http\Controllers\UserController;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;







class ContactController extends Controller
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

    //
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

    /**
     * @param sender&reciever
     * @return msg
     */
    public function start_relation($sender, $reciever)
    {
        $msg = "something went wrong, please try again.";
        if ((DB::select(DB::raw("SELECT * FROM users WHERE id = '$sender'"))) && (DB::select(DB::raw("SELECT * FROM users WHERE id = '$reciever'")))) {

            DB::select(DB::raw("INSERT INTO contacts (demander_id, receiver_id, contact_status) VALUES ('$sender', '$reciever', 'on_hold')"));
            $msg = "your contact request had been sent";
        }
        return "$msg";
    }

    public function get_contact_status($sender, $reciever)
    {
        if ((DB::select(DB::raw("SELECT * FROM users WHERE id = '$sender'"))) && (DB::select(DB::raw("SELECT * FROM users WHERE id = '$reciever'")))) {
            $relation =  DB::select(DB::raw("SELECT contact_status FROM contacts WHERE demander_id = '$sender' AND receiver_id = '$reciever'"));
            if ($relation) {
                $status = $relation[0];
                return response()->json($status);
            }
        }
    }

    public function change_contact_status($sender, $reciever, $status)
    {
        //check if the status is correct
        if (($status == 'aproved') || (($status == 'on_hold')) || ($status == 'denied')) {
            //check the relationship
            $s_r = DB::select(DB::raw("SELECT id FROM contacts WHERE demander_id = '$sender' AND receiver_id = '$reciever'"));
            $r_s = DB::select(DB::raw("SELECT id FROM contacts WHERE demander_id = '$reciever' AND receiver_id = '$sender'"));
        }
        if ($s_r) {
            DB::select(DB::raw("UPDATE contacts SET contact_status = '$status' WHERE demander_id = '$sender' AND receiver_id = '$reciever'"));
        }
        if ($r_s) {
            DB::select(DB::raw("UPDATE contacts SET contact_status = '$status' WHERE demander_id = '$reciever' AND receiver_id = '$sender'"));
        }
    }
}

