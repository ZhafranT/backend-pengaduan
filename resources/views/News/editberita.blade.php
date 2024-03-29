@extends('layout.main')

@section('container')
@php ($errmsg = empty($message) ? '' : $message)
<div class="input-berita-baru">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-lg d-flex justify-content-center">
                <h1>Edit Berita</h1>
            </div>
        </div>
    </div>
    <section class="add mt-2">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <form class="form-add" method="post" action="{{ url('updateberita',$ber->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judulBerita" class="form-label">Judul</label>
                                <input type="text" name="judulBerita" class="form-control" value="{{ $ber->judulBerita }}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                {{-- <input type="hidden" name="oldImage" value="{{ $ber->photo }}"> --}}
                                @if ($ber->photo)
                                    <img src="{{ $ber->photo }}" class="img-preview img-fluid mb-3 col-sm-5">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                
                                <input type="file" name="photo" class="form-control" id="image" onchange="previewImage()">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                                <textarea class="form-control" name="isiBerita" rows="8">{{ $ber->isiBerita }}</textarea>
                            </div>
                            <div class="mb-3" style="color: red">
                                {{ $errmsg }}
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