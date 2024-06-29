<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    // Menampilkan data guru
    public function index()
    {
        $guru = Guru::all();
        return view('guru', ['guru' => $guru]);
    }

    // hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }


        // Menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // Mengambil data guru yang sudah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    // Restore data guru yang dihapus
public function kembalikan($id)
{
    $guru = Guru::onlyTrashed()->where('id', $id)->first();
    $guru->restore();
    return redirect('/guru/trash');
}
// Restore semua data guru yang sudah dihapus
public function kembalikan_semua()
{
    $guru = Guru::onlyTrashed();
    $guru->restore();

    return redirect('/guru/trash');
}
// Hapus permanen
public function hapus_permanen($id)
{
    // Hapus permanen data guru
    $guru = Guru::onlyTrashed()->where('id', $id)->first();
    $guru->forceDelete();

    return redirect('/guru/trash');
}

// Hapus permanen semua guru yang sudah dihapus
public function hapus_permanen_semua()
{
    // Hapus permanen semua data guru yang sudah dihapus
    $guru = Guru::onlyTrashed();
    $guru->forceDelete();

    return redirect('/guru/trash');
}



}
