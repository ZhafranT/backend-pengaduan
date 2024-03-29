@extends('layout.main')

@section('container')
@php ($errmsg = empty($message) ? '' : $message)
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
                                <label for="judulBerita" class="form-label">Judul</label>
                                <input type="text" name="judulBerita" class="form-control" id="judulBerita" placeholder="Judul Berita">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input type="file" name="photo" class="form-control" id="image" onchange="previewImage()">
                            </div>
                            <div class="mb-3">
                                <label for="isiBerita" class="form-label">Isi Berita</label>
                                <textarea class="form-control" name="isiBerita" id="isiBerita" rows="8"></textarea>
                            </div>
                            <div class="mb-3" style="color: red">
                                {{ $errmsg }}
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

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection