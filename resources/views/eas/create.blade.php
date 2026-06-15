@extends('template')
@section('title', 'Tambah Stok Barang')
@section('konten')
<div class="jumbotron">
    <h1>Kode Soal stok_barang</h1>
</div>

<div class="container">
    <form action="/eas/store" method="post" class="form-horizontal" onsubmit="return validateForm()">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" name="kodebarang" id="kodebarang" class="form-control" maxlength="10" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Stok Awal</label>
            <div class="col-sm-10">
                <input type="number" name="stokawal" id="stokawal" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Terjual</label>
            <div class="col-sm-10">
                <input type="number" name="terjual" id="terjual" class="form-control" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/eas">Kembali</a>
    </form>
</div>

<script>
function validateForm() {
    var stokAwal = parseInt(document.getElementById('stokawal').value);
    var terjual = parseInt(document.getElementById('terjual').value);

    // Validasi: Terjual <= Stok Awal
    if (terjual > stokAwal) {
        alert("Jumlah Terjual tidak boleh melebihi Stok Awal!");
        return false;
    }
    return true;
}
</script>
@endsection
