<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newContr extends Controller
{
    public function show()
    {
        return '!!!';
    }

    public function show2($id)
    {
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
        $wh = ['user1','user2','user3','user4','user5'];
if (!in_array($users, $wh)){
return $users[$id];
} else return '!!!';
    }
}
