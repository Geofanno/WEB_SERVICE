@extends('template.master')
@section('judul', 'Informasi Soal')
@section('isi')
<div class="row mt-4">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Informasi Soal
                <a class="btn btn-sm btn-primary float-end"
                href="{{ url('add-soal') }}"><i class="fa-solid fa-square-plus"></i> Tambah Informasi</a>
            </div>
                <div class="card-body">
                <table class="table table-boordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Jumlah Soal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informasi as $soal)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{  $soal->nama_mk }}</td>
                            <td>{{  $soal->dosen }}</td>
                            <td>{{  $soal->jumlah_soal }}</td>
                            <td>{{  $soal->keterangan }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ url('edit-soal')}}/{{ $soal->id }}/edit" role="button"><i
                                    class="fas fa-add"></i> Update </a>
                            <form action=" {{ route('soal.delete', $soal->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    @endsection
