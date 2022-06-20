@extends('template.master')

@section('judul','edit-Soal')

@section('isi')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Edit Data Soal</h3>
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
                            <form action="{{ url('edit-soal')}}/{{ $informasi->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="dosen">Dosen</label>
                                    <input type="text" id="dosen" name="dosen" class="form-control" value="{{old('dosen', $informasi->dosen)}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nmk">Nama Mata Kuliah</label>
                                    <input type="text" id="nmk" name="nama_mk" class="form-control" value="{{old('nama_mk', $informasi->nama_mk)}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="soal">Jumlah Soal</label>
                                    <input type="number" id="soal" name="jumlah_soal" class="form-control" value="{{old('jumlah_soal', $informasi->jumlah_soal)}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ket">Keterangan</label>
                                    <input type="text" id="ket" name="keterangan" class="form-control" value="{{old('keterangan', $informasi->keterangan)}}">
                                </div>
                                <!-- <div class="form-group mb-3">
                                <label for="ss">TEXT</label>
                                <textarea name="txtisi" id="ss" cols="30" rows="2"></textarea>
                            </div> -->
                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                           
                                <a class="btn btn-secondary" href="{{ url('info-soal') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection