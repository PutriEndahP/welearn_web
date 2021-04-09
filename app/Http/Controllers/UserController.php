<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function viewUser()
    {
        $data['users'] = DB::table('users')->where('users.id',Auth::user()->id)
                                            ->get();
        return view('user.view', $data);
    }
}
