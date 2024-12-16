@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Golongan</h2>

    <form action="{{ url('/golongan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>KODE</label>
            <input type="text" name="gol_kode" class="form-control">
        </div>
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="gol_nama" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection