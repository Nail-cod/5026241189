<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TelevisiController extends Controller
{
    public function index_televisi()
    {
        $televisi = DB::table('televisi')->paginate(10);
        return view('televisi.index', ['televisi' => $televisi]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $televisi = DB::table('televisi')
            ->where('merktelevisi', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('televisi.index', ['televisi' => $televisi]);
    }

    public function tambah()
    {
        return view('televisi.create');
    }

    public function store(Request $request)
    {
        DB::table('televisi')->insert([
            'merktelevisi'  => $request->merktelevisi,
            'stocktelevisi' => $request->stocktelevisi,
            'tersedia'      => $request->tersedia,
        ]);
        return redirect('/televisi');
    }

    public function edit($id)
    {
        $televisi = DB::table('televisi')->where('kodetelevisi', $id)->get();
        return view('televisi.edit', ['televisi' => $televisi]);
    }

    public function update(Request $request)
    {
        DB::table('televisi')->where('kodetelevisi', $request->id)->update([
            'merktelevisi'  => $request->merktelevisi,
            'stocktelevisi' => $request->stocktelevisi,
            'tersedia'      => $request->tersedia,
        ]);
        return redirect('/televisi');
    }

    public function hapus($id)
    {
        DB::table('televisi')->where('kodetelevisi', $id)->delete();
        return redirect('/televisi');
    }
}
