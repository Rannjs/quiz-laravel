@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Pelanggan</h3>
    <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="mb-3">
            <label>NO PELANGGAN</label>
            <input type="text" name="pel_no" class="form-control" value="{{ $row->pel_no }}" required>
        </div>

        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="pel_nama" class="form-control" value="{{ $row->pel_nama }}" required>
        </div>

        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="pel_alamat" class="form-control" value="{{ $row->pel_alamat }}" required>
        </div>

        <div class="mb-3">
            <label>NO HP</label>
            <input type="text" name="pel_hp" class="form-control" value="{{ $row->pel_hp }}" required>
        </div>

        <div class="mb-3">
            <label>KTP</label>
            <input type="text" name="pel_ktp" class="form-control" value="{{ $row->pel_ktp }}" required>
        </div>

        <div class="mb-3">
            <label>SERI</label>
            <input type="text" name="pel_seri" class="form-control" value="{{ $row->pel_seri }}" required>
        </div>

        <div class="mb-3">
            <label>METERAN</label>
            <input type="number" name="pel_meteran" class="form-control" value="{{ $row->pel_meteran }}" required>
        </div>

        <div class="mb-3">
            <label>AKTIF</label>
            <select name="pel_aktif" class="form-control" required>
                <option value="Y" {{ $row->pel_aktif == 'Y' ? 'selected' : '' }}>Ya</option>
                <option value="N" {{ $row->pel_aktif == 'N' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection