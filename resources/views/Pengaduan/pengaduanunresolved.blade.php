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
                            <th>Detail Pengaduan</th>
                            <th> </th>
                        </tr>
                    </thead>

                    <tbody class="atable">
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Unresolved</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                            <td><a href="#" class="btn btn-primary btn-process"><span class="text-button">Process</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Unresolved</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                            <td><a href="#" class="btn btn-primary btn-process"><span class="text-button">Process</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Unresolved</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                            <td><a href="#" class="btn btn-primary btn-process"><span class="text-button">Process</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Unresolved</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                            <td><a href="#" class="btn btn-primary btn-process"><span class="text-button">Process</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Unresolved</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                            <td><a href="#" class="btn btn-primary btn-process"><span class="text-button">Process</span></a></td>
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