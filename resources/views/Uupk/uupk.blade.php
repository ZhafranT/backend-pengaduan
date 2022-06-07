@extends('layout.main')

@section('container')
<div class="card-body">
    <h1>Daftar UU Pengaduan Konsumen</h1>
    <a href="/inputuupk" class="btn btn-success mt-5">+Tambah UUPK</a>
    <div class="mt-5">
        {{ $dtUupk->links('pagination::bootstrap-4') }} 
    </div>
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
                <a class="bi bi-pencil-square" href="{{ url('edituupk', $item->id) }}"></a> | 
                <a class="bi bi-trash-fill" href="{{ url('deleteuupk', $item->id) }}" onclick="return confirm('Are you sure?')"></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@include('sweetalert::alert')

@endsection