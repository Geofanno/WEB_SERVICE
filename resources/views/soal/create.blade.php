@extends('template.master')

@section('judul','tambah-soal')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">Tambah Informasi Soal
                            <a class="btn btn-sm btn-info float-end" href="{{ url('info-soal') }}">
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
                            <form action="{{ route('soal.save-soal') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="dosen">Dosen</label>
                                    <input type="text" id="dosen" name="dosen" class="form-control" value="{{old('dosen')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nmk">Nama Mata Kuliah</label>
                                    <input type="text" id="nmk" name="nama_mk" class="form-control" value="{{old('nama_mk')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="soal">Jumlah Soal</label>
                                    <input type="number" id="soal" name="jumlah_soal" class="form-control" value="{{old('jumlah_soal')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ket">Keterangan</label>
                                    <input type="text" id="ket" name="keterangan" class="form-control" value="{{old('keterangan')}}">
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit"
                                    value="Simpan Informasi Soal">
                                <a class="btn btn-warning float-end" href="{{ url('info-soal') }}">
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
