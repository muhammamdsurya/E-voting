<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $kandidatList = Kandidat::kandidat();
        return view('admin.dashboard', [
            'title' => 'Admin',
            'kandidatList' => $kandidatList
        ]);
    }

    public function kandidat()
    {
        $kandidatList = Kandidat::kandidat();
        return view('admin.kandidat', [
            'title' => 'Kandidat',
            'kandidatList' => $kandidatList
        ]);
    }

    public function tambahData()
    {
        $pemilihList = Pemilih::pemilih();
        return view('admin.pemilih.TambahData', [
            'title' => 'Tambah Pemilih',
            'pemilihList' => $pemilihList
        ]);
    }

    public function pemilih() {

    }
}
