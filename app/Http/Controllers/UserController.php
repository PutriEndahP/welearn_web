<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use DB;

class UserController extends Controller
{
    public function showUser()
    {
        $data['users'] = DB::table('users')->get();

        //query score
        return view('user.user', $data);
    }
}
