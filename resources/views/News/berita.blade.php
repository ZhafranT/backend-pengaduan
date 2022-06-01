@extends('layout.main')

@section('container')
    <div class="card-body">
        <h1>Daftar Berita</h1>
        <a href="/inputberita" class="btn btn-success mt-5">+Tambah Berita</a>
        <table class="table table-bordered mt-5">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Nama Admin</th>
                <th>Tanggal Berita</th>
                <th>Action</th>
            </tr>
            @foreach ($dtBerita as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ $item->photo }}" alt="">
                </td>
                <td>{{ $item->judulBerita }}</td>
                <td>{{ $item->isiBerita }}</td>
                <td>{{ $item->admin->name }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a class="bi bi-pencil-square" href="{{ url('editberita', $item->id) }}"></a> |
                    <a class="bi bi-trash-fill" href="{{ url('deleteberita', $item->id) }}" onclick="return confirm('Are you sure?')"></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('sweetalert::alert')
    
@endsection