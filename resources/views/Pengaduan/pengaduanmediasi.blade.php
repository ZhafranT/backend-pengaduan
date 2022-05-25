@extends('layout.main')

@section('container')

@include('partials.pengaduannav')

            <div class="pengaduan-pelanggan">

                <h2>Pengaduan Pelanggan</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Nama Perusahaan</th>
                            <th>Kategori Produk</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th> </th>
                        </tr>
                    </thead>

                    <tbody class="atable">
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td>
                                {{-- <a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a> --}}
                                <div class="popup" id="popup-1">
                                    <div class="overlay"></div>
                                    <div class="contents">
                                        <div class="close-btn" onclick="togglepopup()">&times;</div>
                                        <h1>Report Mediasi</h1>
                                        <section class="add mt-2">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="col-lg-6">
                                                            <form class="form-add" method="POST" action="/postCreate" enctype="multipart/form-data">
                                                                
                                                                {{-- {{ csrf_field() }} --}}
                                                                <div class="mt-5 mb-2">
                                                                    <label for="exampleFormControlInput1" class="form-title form-label">Tanggal:</label>
                                                                    <h3 class="TT-mediasi">10 April 2022</h3>
                                                                </div>

                                                                <div class="mt-4 mb-2">
                                                                    <label for="exampleFormControlInput1" class="form-title form-label">Tempat:</label>
                                                                    <h3 class="TT-mediasi">Offline / Kantor Kemendag</h3>
                                                                </div>

                                                                <div class="mt-4 mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-title form-label">Ulasan:</label>
                                                                    <textarea class="form-control" name="description"id="exampleFormControlTextarea1" rows="8"></textarea>
                                                                    {{-- <input type="text" class="form-control" placeholder="Ulasan Singkat" > --}}
                                                                </div>

                                                                <div class="mb-3 d-flex justify-content-center">
                                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </section>
                                    </div>
                                </div>

                                <button class="btn btn-primary" onclick="togglepopup()">Report</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Report</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Report</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Report</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Report</span></a></td>
                        </tr>
                        <tr>
                            <div aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection