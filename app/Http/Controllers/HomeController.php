<?php

namespace App\Http\Controllers;

use App\Models\nama_pembeli;
use App\Models\sayuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $sayuran = DB::table('sayuran')->get();
        return view('index', ['sayuran' => $sayuran]);
    }

    public function create()
    {
        $nama_pembeli = nama_pembeli::all();
        return view('create', ['nama_pembeli' => $nama_pembeli]);
    }

    public function store(Request $request)
    {
        //DB::beginTransaction();
        //try {
        nama_pembeli::create([
            'id' => $request->id,
            'nama_pembeli' => $request->nama_pembeli,

        ]);

        sayuran::create([
            'id' => $request->id,
            'nama_pembeli' => $request->nama_pembeli,
            'nama_sayuran' => $request->nama_sayuran,
            'tanggal_stok' => $request->tanggal_stok,
            'jumlah' => $request->jumlah,

        ]);

        //DB::commit();
        //} catch (\Throwable $th) {

        //rollback jika terjadi kesalahan
        //DB::rollback();
        //}

        return redirect('/');
    }
}