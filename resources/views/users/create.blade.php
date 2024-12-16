@extends ('layouts.app')

@section('content')

<div class="container">
    <h2>Tambah Data users</h2>

    <form action="{{ url('/users') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>NAMA</label>
            <input type="text" name="user_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>EMAIL</label>
            <input type="text" name="user_email" class="form-control">
        </div>
        <div class="mb-3">
            <label>PASSWORD</label>
            <input type="text" name="user_pass" class="form-control">
        </div>
        <div class="mb-3">
            <label>ALAMAT</label>
            <input type="text" name="user_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label>HP</label>
            <input type="text" name="user_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label>POS</label>
            <input type="text" name="user_pos" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>
</div>
@endsection