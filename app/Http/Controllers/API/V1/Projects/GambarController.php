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

    public function getSoalAngka()
    {
        $data['soal'] = DB::table('soal')->where('id_jenis',2)->get();
        $data['level'] = DB::table('level')->get();
        // return view('soal.soalhuruf', $data);
        return response()->json(['success'=>config('global.http.200'), 'message'=>$data], 200);
    }
}