<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function editSoalHuruf()
    {
        return view('soal.editsoalhuruf');
    }
    
    public function viewSoalHuruf()
    {
        $data['soal'] = DB::table('soal')->where('soal.id_soal',Auth::user()->id)
                                            ->get();
        return view('user.viewsoalhuruf', $data);
    }

    public function showSoalAngka()
    {
        return view('soal.soalangka');
    }
}
