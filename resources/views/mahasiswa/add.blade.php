@extends('template.master')

@section('judul','tambah-mahasiswa')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">Tambah Informasi Mahasiswa
                            <a class="btn btn-sm btn-info float-end" href="{{ url('data-mahasiswa') }}">
                                <i class="fa-solid fa-backward"></i> Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('mahasiswa.save-mahasiswa') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nims">Nim</label>
                                    <input type="number" id="nims" name="nim" class="form-control"
                                        value="{{old('nim')}}" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nm">Nama</label>
                                    <input type="text" id="nm" name="nama_mahasiswa" class="form-control"
                                        value="{{old('nama_mahasiswa')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="smt">Semester</label>
                                    <input type="number" id="smt" name="semester" class="form-control"
                                        value="{{old('semeseter')}}" autocomplete="off">
                                </div>

                                <input type="submit" class="btn btn-primary" name="submit"
                                    value="Simpan Informasi Mahasiswa">
                                <a class="btn btn-warning float-end" href="{{ url('data-mahasiswa') }}">
                                    <i class="fas fa-backward"></i> Cancel
                                </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
