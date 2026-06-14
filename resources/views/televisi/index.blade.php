@extends('template')

@section('title', 'Data Televisi')

@section('konten')
    <center>
        <br />
        <br />
        <p>Cari Data Televisi :</p>
        <form action="/televisicari" method="GET">
            <input type="text" name="cari" placeholder="Cari Televisi .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary mt-2">
        </form>

        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode</th>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($televisi as $t)
                <tr>
                    <td>{{ $t->kodetelevisi }}</td>
                    <td>{{ $t->merktelevisi }}</td>
                    <td>{{ $t->stocktelevisi }}</td>
                    <td>{{ $t->tersedia }}</td>
                    <td>
                        <a href="/televisiedit/{{ $t->kodetelevisi }}" class="btn btn-warning">Edit</a>
                        <a href="/televisihapus/{{ $t->kodetelevisi }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <ul class="pagination" style="margin:20px 0">
            {{ $televisi->links() }}
        </ul>

        <a href="/televisitambah" class="btn btn-primary">Tambah Televisi Baru</a>
    </center>
@endsection
