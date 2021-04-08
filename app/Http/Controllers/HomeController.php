<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use DB;

class HomeController extends Controller
{
    public function show()
    {
        $data['count'] = DB::table('users')->count();
        return view('home.home', $data);
    }
}
