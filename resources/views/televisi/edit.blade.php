@extends('template')

@section('title', 'Edit Televisi')

@section('konten')
    <center>
        <br />
        <br />

        @foreach ($televisi as $t)
            <div class="card">
                <div class="card-header">
                    Form Edit Data Televisi
                </div>

                <div class="card-body">
                    <form action="/televisiupdate" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $t->kodetelevisi }}">

                        <div class="row mb-3">
                            <label for="merktelevisi" class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" name="merktelevisi" id="merktelevisi" class="form-control" required
                                    value="{{ $t->merktelevisi }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="stocktelevisi" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="number" name="stocktelevisi" id="stocktelevisi" class="form-control" required
                                    value="{{ $t->stocktelevisi }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                            <div class="col-sm-10">
                                <select name="tersedia" id="tersedia" class="form-control" required>
                                    <option value="Y" {{ $t->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                                    <option value="N" {{ $t->tersedia == 'N' ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="offset-sm-2 col-sm-10">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        @endforeach

        <br />
        <a href="/televisi" class="btn btn-info">Kembali</a>
    </center>
@endsection
