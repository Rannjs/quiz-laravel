@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Golongan</h2>
    <a href="{{ url('/golongan/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah Golongan</button></a>
    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 15%;">KODE</th>
                <th>NAMA</th>
                <th style="width: 10%;">EDIT</th>
                <th style="width: 10%;">DELETE</th>
            </tr>
        </thead>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">
            <i class="fa fa-edit"></i> Edit
            </a>
                <td>
                <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection