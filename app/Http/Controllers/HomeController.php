<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Score;

use DB;

class HomeController extends Controller
{
    public function show()
    {
        // $max = DB::tabel('score', 1)->max('id_jenis');
        // $data['max'] = DB::where('id_jenis', 1) 
        // ->orderBy('score', 'dsc')
        // ->take(1) 
        // ->get();

        $data['count'] = DB::table('users')->count();
        return view('home.home', $data);
    }
}
