@extends('layout.main')

@section('title', 'Input UU Pengaduan Konsumen')

@section('container')
        <main>
            <div class="input-uupk-baru">
                <div class="container mt-5">
                    <div class="row ">
                        <div class="col-lg d-flex justify-content-center">
                            <h1>Input UU Pengaduan Konsumen</h1>
                        </div>
                    </div>
                </div>
                <section class="add mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <form class="form-add" method="post" action="/submituupk" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nomor UU</label>
                                            <input type="text" name="nomorUU" class="form-control" id="nomorUU" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Bab</label>
                                            <input type="text" name="bab" class="form-control" id="bab" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="judulBab" class="form-control" id="judulBab" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pasal</label>
                                            <input type="text" name="pasal" class="form-control" id="pasal" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                                            <textarea class="form-control" name="isi" id="isi" rows="8"></textarea>
                                        </div>
                                        <div class="mb-3 d-flex justify-content-center">
                                            <input class="btn btn-success" type="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
@endsection