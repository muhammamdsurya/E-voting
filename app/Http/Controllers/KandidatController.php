<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index(){
        $kandidatList = Kandidat::kandidat();
        return view('menu', [
            'kandidatList' => $kandidatList
        ]);
    }
}
