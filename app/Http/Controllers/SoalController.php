<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function showSoalHuruf()
    {
        return view('soal.soalhuruf');
    }

    public function showSoalAngka()
    {
        return view('soal.soalangka');
    }
}
