@extends('layout.main')

@section('container')

@php ($errmsg = empty($message) ? '' : $message)
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
                                    <label for="nomorUU" class="form-label">Nomor UU</label>
                                    <input type="text" name="nomorUU" class="form-control" value="{{ $uup->nomorUU }}">
                                </div>
                                <div class="mb-3">
                                    <label for="bab" class="form-label">Bab</label>
                                    <input type="text" name="bab" class="form-control" value="{{ $uup->bab }}">
                                </div>
                                <div class="mb-3">
                                    <label for="judulBab" class="form-label">Judul</label>
                                    <input type="text" name="judulBab" class="form-control" value="{{ $uup->judulBab }}">
                                </div>
                                <div class="mb-3">
                                    <label for="pasal" class="form-label">Pasal</label>
                                    <input type="text" name="pasal" class="form-control" value="{{ $uup->pasal }}">
                                </div>
                                <div class="mb-3">
                                    <label for="isi" class="form-label">Isi</label>
                                    <textarea class="form-control" name="isi" rows="8">{{ $uup->isi }}</textarea>
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
</main>
@endsection