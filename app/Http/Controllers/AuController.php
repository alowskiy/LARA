<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuController extends Controller
{
    public function login(Request $request )
    {
$user = User::query()->where('username', $request->get('username') )
    ->where('password', $request->get('password') )->first();
if ($user){

}else{
    return response()->json(['success': true, 'message' ])
}
    }
}
