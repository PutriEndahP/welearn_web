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
        // $max['maxHuruf'] = DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')->where('soal.id_jenis', 1)
        //  ->where('score.id_user', '=' ('score.id_user')->sum('score.score')->max('score.score'));
         
        //  1)->sum('score.score');
        // $maxHuruf['maxHuruf'] = DB::table('score')->max('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')
        // ->where('soal.id_jenis', 1)->sum('score.score')
        // ->groupBy('score.id_user', 1);

        $maxHuruf['maxHuruf']= DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')
        ->select(DB::raw('sum(score.score) as total_score'))
        ->where('soal.id_jenis', 1)
        ->groupBy('score.id_user')
        ->orderBy('score.id_user', 'DESC')->get();

//         $maxHuruf['maxHuruf']=DB::table('score')
// ->join(
//     'soal',
//     'soal.id_soal',
//     '=',
//     'score.id_soal'
// )->selectRaw('score.id_user, sum(score.score)')
// ->groupBy('score.id_user')->orderBy('score.id_user', 'DESC')
// ->get();

        // ->first();
        // ->get(max(['score.id_user']));

        // $maxAngka['maxAngka']= DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')
        // ->select(DB::raw('sum(score.score) as total_score'))
        // ->where('soal.id_jenis', 2)
        // ->groupBy('score.id_user')
        // ->orderBy('score.id_user', 'DESC')->get();
        // ->first();
        // ->get(max(['score.id_user']));

        return view('home.home', $data, $maxHuruf);
        // print_r($maxHuruf);die();
        // print_r($maxHuruf['maxHuruf'][0]->total_score);die;
        // echo '<pre>';print_r($maxHuruf);echo '</pre>';die();
        // print_r($maxHuruf['maxHuruf']['*items'][0]->total_score);die();
        
    }
}
