@extends('layout.main')

@section('title', 'Halaman Daftar UU Pengaduan Konsumen')

@section('container')
    <div class="card-body">
        <h1>Daftar UU Pengaduan Konsumen</h1>
        <a href="/inputuupk" class="btn btn-success mt-5">+Tambah UUPK</a>
        <table class="table table-bordered mt-5">
            <tr>
                <th>Nomor UU</th>
                <th>Bab</th>
                <th>Judul Bab</th>
                <th>Pasal</th>
                <th>Isi</th>
                <th>Action</th>
            </tr>
            @foreach ($dtUupk as $item)
            <tr>
                <td>{{ $item->nomorUU }}</td>
                <td>{{ $item->bab }}</td>
                <td>{{ $item->judulBab }}</td>
                <td>{{ $item->pasal }}</td>
                <td>{{ $item->isi }}</td>
                <td>
                    <a class="badge bg-primary" href="{{ url('edituupk', $item->id) }}">edit</a> | 
                    <a class="badge bg-danger" href="{{ url('deleteuupk', $item->id) }}" onclick="return confirm('Are you sure?')">delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="card-footer">
            {{ $dtUupk->links() }} 
        </div>
    </div>
    @include('sweetalert::alert')
    
@endsection