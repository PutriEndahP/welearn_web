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
        $data['soal'] = DB::table('soal')->where('id_jenis',2)->get();
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
        $newSoalHuruf->jawaban = $request->jawaban;

        $status = $newSoalHuruf->save();
        if($status)
        {
            return redirect('/soal_huruf'); // redirect ke /route nya
        }
    }

    public function editSoalHuruf($id)
    {
        // return view('soal.editsoalhuruf');
        $huruf = DB::table('soal')->where('id_soal',$id)->first();
        return view('soal.editsoalhuruf', ['huruf' => $huruf]);
        // return view('soal.editsoalhuruf', compact($huruf);
        
    }

    public function postSoalHuruf(Request $request)
    {
        $status = DB::table('soal')->where('id_soal', $request->id)
                                ->update(['id_jenis'=>$request->id_jenis,'id_level'=>$request->id_level,'soal'=>$request->soal,'keterangan'=>$request->keterangan,'jawaban'=>$request->jawaban]);
        if($status)
        {
            return redirect('/soal_huruf'); // redirect ke /route nya
        }
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
