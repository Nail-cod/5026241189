@extends('template')
@section('title', 'Data Stok Barang')
@section('konten')
    <div class="jumbotron">
        <h1>Kode Soal stok_barang</h1>
    </div>
    <center>
        <h2>Daftar Stok Barang</h2>
        <a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
        <br /><br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Barang</th>
                <th>Stok Awal</th>
                <th>Terjual</th>
                <th>Stok Akhir</th>
                <th>Persentase Terjual</th>
            </tr>
            @foreach ($stokbarang as $b)
                @php
                    $stok_akhir = $b->stokawal - $b->terjual; // Selisih Stok Akhir
                    $persentase = ($stok_akhir / $b->stokawal) * 100; // Presentase Terjual
                @endphp
                <tr>
                    <td>{{ $b->kodebarang }}</td>
                    <td>{{ $b->stokawal }}</td>
                    <td>{{ $b->terjual }}</td>
                    <td>{{ $stok_akhir }}</td>
                    <td>{{ round($persentase, 2) }}%</td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection
