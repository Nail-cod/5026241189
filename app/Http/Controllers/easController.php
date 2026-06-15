<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller {
    public function index() {
        $stok = DB::table('stok_barang')->get();
        return view('eas.index', ['stokbarang' => $stok]);
    }

    public function create() {
        return view('eas.create');
    }
}
