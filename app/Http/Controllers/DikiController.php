<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}
