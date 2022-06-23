@extends('layout.main')

@section('container')

@include('partials.pengaduannav')
@php ($errmsg = empty($message) ? '' : $message)
<div class="pengaduan-pelanggan">

    <h2 class="mt-5">Mediasi Pengaduan</h2>
    <br><br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Produk</th>
                <th>Detail Produk</th>
                <th>Merk Dagang</th>
                <th>Type</th>
                <th>Jenis Pengaduan</th>
                <th>Tanggal Mediasi</th>
                <th>Tempat Mediasi</th>
                <th>Status</th>
                <th>Lihat Detail</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dtMediasi as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ date('d-m-Y', strtotime($item->tanggalMediasi)) }}</td>
                <td>{{ $item->tempatMediasi }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td><a href="{{ url('detailpengaduanmediasi', $item->id) }}"><span class="material-icons-sharp">find_in_page</span></a></td>
                <td>
                    <button class="btn btn-success" onclick="togglepopup('{{ $item->pengaduan->id }}')">Report</button>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="contents">
                            <div class="close-btn btn-success" onclick="togglepopup()">&times;</div>
                            <h1>Report Mediasi</h1>
                            <section class="add mt-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-lg-6">
                                                <form id="toupdatedataform" class="form-add" method="POST" action="{{ url('processReport') }}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}

                                                    <div class="mt-4 mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-title form-label">Ulasan:</label>
                                                        <textarea class="form-control" name="reportMediasi" id="exampleFormControlTextarea1" rows="8"></textarea>
                                                    </div>
                                                    <div class="mb-3" style="color: red">
                                                        {{ $errmsg }}
                                                    </div>
                                                    <div class="mb-3 d-flex justify-content-center">
                                                        <input class="btn btn-success" type="submit" value="Submit" onclick="return togglesendparam2();">
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
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