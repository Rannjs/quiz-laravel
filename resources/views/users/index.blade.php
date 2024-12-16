@extends ('layouts.app')

@section('content')
<div class="container">
    <h2 style="text-align: center; align-items: center; font-family:serif;">Users</h2>
    <a href="{{ url('/users/create') }}"><button class="btn-sm mb-3" style="box-shadow: 12px 12px 5px rgba(0, 0, 255, .2);" >Tambah user</button></a>
    <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-dark">
            <tr>
            <th style="width: 5%;">ID</th>
                <th>NAMA</th>
            <th style="width: 5%;">EMAIL</th>
            <th style="width: 5%;">PASSWORD</th>
            <th>ALAMAT</th>
            <th style="width: 5%;">HP</th>
            <th style="width: 5%;">POS</th>
            <th style="width: 10%;">EDIT</th>
            <th style="width: 10%;">DELETE</th>
        </tr>
</thead>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->user_id }}</td>
            <td>{{ $row->user_nama }}</td>
            <td>{{ $row->user_email }}</td>
            <td>{{ $row->user_pass }}</td>
            <td>{{ $row->user_alamat }}</td>
            <td>{{ $row->user_hp }}</td>
            <td>{{ $row->user_pos }}</td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('users/' . $row->user_id . '/edit') }}">
            <i class="fa fa-edit"></i> Edit
            </a>
                <td>
                <form action="{{ url('users/' . $row->user_id) }}" method="POST" style="display: inline;">
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