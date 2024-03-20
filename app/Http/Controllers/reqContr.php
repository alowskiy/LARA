<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class reqContr extends Controller
{
   public function show()
   {
       return response()->json([
           'message' => 'Success'

       ],200);
   }
}
