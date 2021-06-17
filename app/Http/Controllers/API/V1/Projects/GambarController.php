<?php

namespace App\Http\Controllers\API\V1\Projects;

use App\Http\Controllers\Controller;
use App\Models\File;
use FilesystemIterator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class GambarController extends Controller
{
    public function trainHuruf()
    {
        ini_set('max_execution_time','1800');
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            if(file_exists(public_path()."\\all_huruf.gzip")){
                unlink(public_path()."\\all_huruf.gzip");
            }
            if(file_exists(public_path()."\\modelTR_Huruf.pkl")){
                unlink(public_path()."\\modelTR_Huruf.pkl");
            }
            $command = escapeshellcmd("python ".public_path()."\\code\\doTrainHurufBaru.py");
        } else {
            if(file_exists(public_path()."/all_huruf.gzip")){
                unlink(public_path()."/all_huruf.gzip");
            }
            if(file_exists(public_path()."/modelTR_Huruf.pkl")){
                unlink(public_path()."/modelTR_Huruf.pkl");
            }
            $command = escapeshellcmd("python ".public_path()."/code/doTrainHurufBaru.py");
        }
        // die($command);
        // echo "<pre>".shell_exec($command)."</pre>";
        $output[] = shell_exec($command);
        return response()->json(['success'=>config('global.http.200'), 'message'=>$output], 200);
    }

    public function predict(Request $req)
    {
        $user = Auth::user();
        $input= $req->all();
        $idSoal= $input['id_soal'];
        $data= (array) $input['img'];
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $folder = env('uploadFolder').'\\'.$user->id;
        } else {
            $folder = env('uploadFolder').'/'.$user->id;
        }
        
        if (!file_exists($folder)) {
            if (!mkdir($folder, 0777, true)) {
                $m = array('msg' => "REJECTED, cant create folder");
                echo json_encode($m);
                return;
            }
        }

        $output= array();
        foreach ($data as $key => $d){
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                $fullName = $folder."\\X_".$key."_". date("YmdHis") .".png"; // windows pake \\
            } else {
                $fullName = $folder."/X_".$key."_". date("YmdHis") .".png"; // linux pake /
            }
            $ifp = fopen($fullName, "wb");
            fwrite($ifp, base64_decode($d));
            fclose($ifp);
            if (!$ifp) {
                $m = array('masg' => "REJECTED, ".$fullName."not saved" );
                echo json_encode($m);
                return;
            }
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                // $command = escapeshellcmd("python ".public_path()."\\checkFile.py ".$fullName);
                $command = escapeshellcmd("python ".public_path()."\\code\\checkFile.py ".$fullName);
            } else {
                $command = escapeshellcmd("python ".public_path()."/checkFile.py ".$fullName);
            }
            // die($command);
            shell_exec($command);

            unset($command);
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                $modelFile= public_path()."\\modelTR_Huruf.pkl";
                // $command = escapeshellcmd("python ".public_path()."\\checkFile.py ".$fullName);
                $command = escapeshellcmd("python ".public_path()."\\code\\doPredictHuruf.py ".$fullName." ".$modelFile);
            } else {
                $modelFile= public_path()."/modelTR_Huruf.pkl";
                $command = escapeshellcmd("python ".public_path()."/doPredictHuruf.py ".$fullName." ".$modelFile);
            }
            // die($command);
            $output[] = shell_exec($command);
        }

        $output= implode('',$output);
        $text = preg_replace("/\r|\n/", "", $output);
        // $output= implode('<br>',$output);
        // $msg= 'Data Your files has been successfully added, python : '.$output;

        return response()->json(['success'=>config('global.http.200'), 'message'=>$text], 200);

    }

    public function getSoalAngka(string $level)
    {
        $data['soal'] = DB::table('soal')->where('id_level',$level)->where('id_jenis', '2')->get();
        $res= $data['soal'][rand(0, count($data['soal']) - 1)];
        // return view('soal.soalhuruf', $data);
        return response()->json(['success'=>config('global.http.200'), 'message'=>$res], 200);
    }

    public function getSoalHuruf(string $level)
    {
        $data['soal'] = DB::table('soal')->where('id_level',$level)->where('id_jenis', '1')->get();
        $res= $data['soal'][rand(0, count($data['soal']) - 1)];
        // return view('soal.soalhuruf', $data);
        return response()->json(['success'=>config('global.http.200'), 'message'=>$res], 200);
    }

    public function getRandHuruf(string $level, $n = 1)
    {
        $awal = microtime(true);
        $lv = (int)$level;
        if($lv > 0 && $lv <= 4){
            $data['soal'] = DB::table('soal')->where('id_level', $level)->where('id_jenis', '1')->get();
            $soal = $data['soal'];
            $jumlah = count($data['soal']);

            for($i = $jumlah - 1; $i >=0; $i--)
            {
                $j = rand(0, $i);

                $tmp = $soal[$i];
                $soal[$i] = $soal[$j];
                $soal[$j] = $tmp;
            }
            for($i = 0; $i <= $n; $i++)
            $ret[$i] = $soal[$i];
            $akhir = microtime(true);
            $lama = $akhir-$awal;
            return response()->json(['response_time'=>$lama,'success'=>config('global.http.200'), 'message'=>$ret], 200);
        }

        else{
            return response()->json(['error'=>config('global.http.404'), 'message'=>'Level melebihi batas maksimal'], 404);
        }
        
    }

    public function getRandAngka(string $level, $n = 1)
    {
        $awal = microtime(true);
        $lv = (int)$level;
        if($lv > 0 && $lv <= 4){
            $data['soal'] = DB::table('soal')->where('id_level', $level)->where('id_jenis', '2')->get();
            $soal = $data['soal'];
            $jumlah = count($data['soal']);

            for($i = $jumlah - 1; $i >=0; $i--)
            {
                $j = rand(0, $i);

                $tmp = $soal[$i];
                $soal[$i] = $soal[$j];
                $soal[$j] = $tmp;
            }
            for($i = 0; $i <= $n; $i++)
            $ret[$i] = $soal[$i];
            $akhir = microtime(true);
            $lama = $akhir-$awal;
            return response()->json(['response_time'=>$lama,'success'=>config('global.http.200'), 'message'=>$ret], 200);
        }

        else{
            return response()->json(['error'=>config('global.http.404'), 'message'=>'Level melebihi batas maksimal'], 404);
        }
    }

    public function scoreHuruf(Request $request)
    {
        $user = Auth::user();
        $req= (array) $request->all();

        $scoreHuruf['score'] = DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')->where('soal.id_jenis', 1)
        ->where('soal.id_level', intval($req['id_level'])  )
        ->where('score.id_user', $user->id)->sum('score.score');
        return response()->json(['success'=>config('global.http.200'), 'message'=>$scoreHuruf], 200);

    }

    public function scoreHurufUser()
    {
        $user = Auth::user();
        $scoreHuruf['score'] = DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')->where('soal.id_jenis', 1)
        ->where('score.id_user', $user->id)->sum('score.score');
        return response()->json(['success'=>config('global.http.200'), 'message'=>$scoreHuruf], 200);
    }

    public function scoreAngkaUser()
    {
        $user = Auth::user();
        $scoreHuruf['score'] = DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')->where('soal.id_jenis', 2)
        ->where('score.id_user', $user->id)->sum('score.score');
        return response()->json(['success'=>config('global.http.200'), 'message'=>$scoreHuruf], 200);
    }

    public function scoreTHuruf()
    {

        $data['score']= DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')
        ->join('users', 'users.id', '=', 'score.id_user')
        ->select('users.name', DB::raw('sum(score.score) as total'))
        ->where('soal.id_jenis', 1)
        ->groupBy('users.name')
        ->orderBy('score.score', 'DESC')->get();

        // $data['score'] = DB::table('score')->get();
        return response()->json(['success'=>config('global.http.200'), 'message'=>$data], 200);
    }

    public function scoreTAngka()
    {

        $data['score']= DB::table('score')->join('soal', 'score.id_soal', '=', 'soal.id_soal')
        ->join('users', 'users.id', '=', 'score.id_user')
        ->select('users.name', DB::raw('sum(score.score) as total'))
        ->where('soal.id_jenis', 2)
        ->groupBy('users.name')
        ->orderBy('score.score', 'DESC')->get();

        // $data['score'] = DB::table('score')->get();
        return response()->json(['success'=>config('global.http.200'), 'message'=>$data], 200);
    }

}