<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\JenisSoal;
use App\Models\Level;

use DB;

class SoalController extends Controller
{
    public function showSoalHuruf()
    {
        $data['soal'] = DB::table('soal')->get();
        $data['level'] = DB::table('level')->get();
        return view('soal.soalhuruf', $data);
    }

    // public function addSoalHuruf()
    // {
    //     $data['soal'] = DB::table('soal')->get();        
    //     return view('soal.soalhuruf', $data);
    // }

    public function storeSoalHuruf(Request $request)
    {
        $newSoalHuruf = new Soal();
        $newSoalHuruf->id_jenis = $request->id_jenis;
        $newSoalHuruf->id_level = $request->id_level;
        $newSoalHuruf->soal = $request->soal;
        $newSoalHuruf->keterangan = $request->keterangan;

        $status = $newSoalHuruf->save();
        if($status)
        {
            return redirect('/soal_huruf'); // redirect ke /route nya
        }
    }

    public function showSoalAngka()
    {
        return view('soal.soalangka');
    }
}
