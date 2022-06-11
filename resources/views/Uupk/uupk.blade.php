@extends('layout.main')

@section('container')

<div class="card-body">
    <h2>Daftar UU Pengaduan Konsumen</h2>
    <a href="/inputuupk" class="btn btn-success mt-5">+Tambah UUPK</a>
    <br><br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nomor UU</th>
                <th>Bab</th>
                <th>Judul Bab</th>
                <th>Pasal</th>
                <th>Isi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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