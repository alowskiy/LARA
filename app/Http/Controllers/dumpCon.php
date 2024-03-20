<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class dumpCon extends Controller
{
    public function show()
    {
        $post = DB::table('users')->get();


        return json_decode($post);


    }
    public function showid($id)
    {
        $post = DB::table('users')->where('id',$id)->get();


        return $post;


    }

}


