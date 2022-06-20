@extends('template.master')
@section('judul', 'Informasi Mahasiswa')
@section('isi')
<div class="row mt-4">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Informasi Mahasiswa
                <a class="btn btn-sm btn-primary float-end"
                href="{{ url('add-mahasiswa') }}"><i class="fa-solid fa-square-plus"></i> Tambah Informasi</a>
            </div>
                <div class="card-body">
                <table class="table table-boordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nim }}</td>
                            <td>{{ $row->nama_mahasiswa }}</td>
                            <td>{{ $row->semester }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ url('edit-mahasiswa')}}/{{ $row->id }}/edit" role="button"><i
                                    class="fas fa-add"></i> Update </a>
                            <form action=" {{ route('mahasiswa.delete', $row->id) }}" method="post" class="d-inline">
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
