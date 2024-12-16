@extends ('layouts.app')

@section('content')
<div class="container">
    <!-- Header Halaman -->
    <h2 style="text-align: center; font-family: serif;">Pelanggan</h2>

    <!-- Tombol Tambah Pelanggan -->
    <a href="{{ url('/pelanggan/create') }}">
    <button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Pelanggan</button></a>
      
    <!-- Tabel Data Pelanggan -->
    <table class="table table-bordered table-hover text-center align-middle">
        <!-- Header Tabel -->
        <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>GOLONGAN</th>
                <th>USER</th>
                <th>NO PELANGGAN</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
                <th>KTP</th>
                <th>SERI</th>
                <th>METERAN</th>
                <th>AKTIF</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>

        <!-- Isi Tabel -->
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pel_id }}</td>
                <td>{{ $row->pel_gol_id }}</td>
                <td>{{ $row->pel_user_id }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->pel_ktp }}</td>
                <td>{{ $row->pel_seri }}</td>
                <td>{{ $row->pel_meteran }}</td>
                <td>{{ $row->pel_aktif ? 'Aktif' : 'Non-Aktif' }}</td>

                <!-- Tombol Edit -->
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">
                        Edit
                    </a>
                </td>

                <!-- Tombol Delete -->
                <td>
                    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
