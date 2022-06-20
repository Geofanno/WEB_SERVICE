<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
         
        return view('mahasiswa/index', compact('data'));
    }

    public function create(){
        return view('mahasiswa/add');
    }
    public function destroy(){
        $id->delete();
        return redirect(url('data-mahasiswa'));
    }
    public function edit($id){
        $data = Mahasiswa::find($id);
        return view('mahasiswa/edit', compact('data'));
    }
    public function update($id, Request $request){
        $data = Mahasiswa::find($id);
         //    validasi update siswa
        $rules = [
            'nama_mahasiswa' => 'required|min:4',
            'semester' => 'required|numeric'
        ];
        // validasi nim untuk nim agar tidak sama dengan nim yg lain(unique)
        if($request->nim != $data->nim) {
            $rules['nim'] = 'required|unique:mahasiswa';
        }
        $validatedData = $request->validate($rules);
        // end validasi siswa
        $data->update($request->all());
        // redirect
        return redirect(url('data-mahasiswa'));
        // dd($request->all());
    }
}
