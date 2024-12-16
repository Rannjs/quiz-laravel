@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data Pelanggan</h2>

    <form action="{{ url('/pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>GOLONGAN</label>
            <select name="pel_gol_id" id="pel_gol_id" class="form-control">
                @foreach ($rows['data_gol'] as $row)
                <option value="{{ $row->gol_id }}">{{ $row->gol_nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>USERS</label>
            <select name="pel_user_id" id="pel_user_id" class="form-control">
                @foreach ($rows['data_users'] as $row)
                <option value="{{ $row->user_id }}">{{ $row->user_nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>NO PELANGGAN</label>
            <input type="text" name="pel_no" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="pel_nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="pel_alamat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NO HP</label>
            <input type="text" name="pel_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>KTP</label>
            <input type="text" name="pel_ktp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>SERI</label>
            <input type="text" name="pel_seri" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>METERAN</label>
            <input type="number" name="pel_meteran" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>AKTIF</label>
            <select name="pel_aktif" class="form-control" required>
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>

@endsection