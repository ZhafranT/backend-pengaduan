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
                            <td>Process</td>
                            <td>
                                {{-- <a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a> --}}
                                <div class="popup" id="popup-1">
                                    <div class="overlay"></div>
                                    <div class="contents">
                                        <div class="close-btn" onclick="togglepopup()">&times;</div>
                                        <h1>Update Mediasi</h1>
                                        <section class="add mt-2">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="col-lg-6">
                                                            <form class="form-add" method="POST" action="/postCreate" enctype="multipart/form-data">
                                                                
                                                                {{-- {{ csrf_field() }} --}}
                                                                <div class="mt-5 mb-2">
                                                                    <label for="exampleFormControlInput1" class="form-title form-label">Tanggal</label>
                                                                    {{-- <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul"> --}}
                                                                </div>
                                                                <div class="date"> 
                                                                    <input type="date"> 
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-title form-label">Tempat</label>
                                                                    <select class="form-select" name="name" aria-label="Default select example">
                                                                        <option selected>Pilih Tempat</option>
                                                                        <option value="">Offline / Kantor Kemendag</option>
                                                                        <option value="">Online / Virtual Meeting</option>
                                                                        {{-- @foreach ($categories as $c)         
                                                                        <option value={{$c->id}}>{{$c->name}}</option>
                                                                        @endforeach --}}
                                                                    </select>
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

                                <button class="btn btn-primary" onclick="togglepopup()">Mediasi</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Process</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Process</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Process</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Process</td>
                            <td><a href="#" class="btn btn-primary"><span class="text-button">Mediasi</span></a></td>
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