<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
class autCo extends Controller
{
    public function show( Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required'
        ]);

        if ($validator->fails()) {

            return \response()->json(['f'=>'fdf']);






}

}
}
