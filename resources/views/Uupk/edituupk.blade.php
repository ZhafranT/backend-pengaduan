@extends('layout.main')

@section('title', 'Edit UU Pengaduan')

@section('container')
        <main>
            <div class="input-uupk-baru">
                <div class="container mt-5">
                    <div class="row ">
                        <div class="col-lg d-flex justify-content-center">
                            <h1>Edit UU Pengaduan Konsumen</h1>
                        </div>
                    </div>
                </div>
                <section class="add mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <form class="form-add" action="{{ url('updateuupk',$uup->id) }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nomor UU</label>
                                            <input type="text" name="nomorUU" class="form-control" id="nomorUU" placeholder="" value="{{ $uup->nomorUU }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Bab</label>
                                            <input type="text" name="bab" class="form-control" id="bab" placeholder="" value="{{ $uup->bab }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="judulBab" class="form-control" id="judulBab" placeholder="" value="{{ $uup->judulBab }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pasal</label>
                                            <input type="text" name="pasal" class="form-control" id="pasal" placeholder="" value="{{ $uup->pasal }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                                            <textarea class="form-control" name="isi" id="isi" rows="8">value={{ $uup->isi }}</textarea>
                                        </div>
                                        <div class="mb-3 d-flex justify-content-center">
                                            <input class="btn btn-primary" type="submit" value="Ubah Data">
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