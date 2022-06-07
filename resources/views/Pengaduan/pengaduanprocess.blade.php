@extends('layout.main')

@section('container')

@include('partials.pengaduannav')

<div class="pengaduan-pelanggan">

    <h2 class="mt-5">Pengaduan Diproses</h2>

    <table class="mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Produk</th>
                <th>Detail Produk</th>
                <th>Merk Dagang</th>
                <th>Type</th>
                <th>Jenis Pengaduan</th>
                <th>Tanggal Proses</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>

        <tbody class="atable">
            @foreach ($dtProcess as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ date('d-m-Y', strtotime($item->updated_at)) }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td>
                    <button class="btn btn-primary" onclick="togglepopup('{{ $item->pengaduan->id }}')">Mediasi</button>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="contents">
                            <div class="close-btn btn-primary" onclick="togglepopup()">&times;</div>
                            <h1>Update Mediasi</h1>
                            <section class="add mt-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-lg-6">
                                                <form id="toupdatedataform" class="form-add" method="POST" action="{{ url('processMediasi') }}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="mt-5 mb-2">
                                                        <label for="exampleFormControlInput1" class="form-title form-label">Tanggal</label>
                                                    </div>
                                                    <div class="date"> 
                                                        <input type="date" name="mediasitanggal"> 
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-title form-label">Tempat:</label>
                                                        <select class="form-select" name="mediasitempat" aria-label="Default select example">
                                                            <option selected>Pilih Tempat</option>
                                                            <option value="Offline / Kantor Kemendag">Offline / Kantor Kemendag</option>
                                                            <option value="Online / Virtual Meeting">Online / Virtual Meeting</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3 d-flex justify-content-center">
                                                        <input class="btn btn-primary" type="submit" value="Submit" onclick="return togglesendparam();">
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
            <tr>
                {{ $dtProcess->links('pagination::bootstrap-4') }}
            </tr>
        </tbody>
    </table>
</div>
@endsection