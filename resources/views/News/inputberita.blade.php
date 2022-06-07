@extends('layout.main')

@section('container')
<div class="input-berita-baru">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-lg d-flex justify-content-center">
                <h1>Buat Berita Baru</h1>
            </div>
        </div>
    </div>
    <section class="add mt-2">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <form class="form-add" method="post" action="/submitberita" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judulberita" placeholder="Judul Berita">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                <input type="file" name="photoberita" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                                <textarea class="form-control" name="isi" id="isiberita" rows="8"></textarea>
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
@endsection