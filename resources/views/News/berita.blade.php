@extends('layout.main')

@section('container')

<div class="card-body">
    <h2>Daftar Berita</h2>
    <a href="/inputberita" class="btn btn-success mt-5">+Tambah Berita</a>
    <br><br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Nama Admin</th>
                <th>Tanggal Berita</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtBerita as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                </td>
                <td>{{ $item->judulBerita }}</td>
                <td>{{ $item->isiBerita }}</td>
                <td>{{ $item->admin->name }}</td>
                <td>{{ date('d-m-Y H:i:s', strtotime($item->updated_at)) }}</td>
                <td>
                    <a class="bi bi-pencil-square" href="{{ url('editberita', $item->id) }}"></a> |
                    <a class="bi bi-trash-fill" href="{{ url('deleteberita', $item->id) }}" onclick="return confirm('Are you sure?')"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
</div>
@include('sweetalert::alert')
@endsection