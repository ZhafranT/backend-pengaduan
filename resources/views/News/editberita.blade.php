@extends('layout.main')

@section('container')
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
                                    <form class="form-add" action="{{ url('updateberita',$ber->id) }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="judulBerita" class="form-control" id="judul" placeholder="Judul Berita"  value="{{ $ber->judulBerita }}">
                                            {{-- <textarea class="form-control" name="judulBerita" id="judul" rows="8">{{ $ber->judulBerita }}</textarea> --}}
                                        </div>
                                        {{-- <div class="mb-3">
                                            <img src="{{ $ber->photo }}" alt=""> <br>
                                            <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                            <input type="file" name="photo" id="" class="form-control">
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                                            <textarea class="form-control" name="isiBerita" id="isi" rows="8">{{ $ber->isiBerita }}</textarea>
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
@endsection