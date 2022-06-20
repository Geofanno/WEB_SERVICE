<?php

namespace App\Http\Controllers;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $informasi = Soal::all();
       return view('soal/index', compact('informasi'));
    }
    public function create()
    {
       return view('soal/create');
    }
    public function ambilData(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric|unique:soal|min:4',
            'dosen' => 'required|min:5|max:10',
            'nama_mk' => 'required|min:8|max:50',
            'jumlah_soal' => 'required|min:8|max:255',
            'keterangan' => 'required|min:8|max:255'

        ]);
        $informasi = Soal::create($request->all());
        // redirect
        return redirect('data-soal');
        // dd($request->all());
    }
    public function destroy(Soal $id)
    {
        $id->delete();
        return redirect(url('data-soal'));
    }
    public function edit($id)
    {
        $informasi = Soal::find($id);
        // dd($informasi);
        return view('soal/edit', compact('informasi'));
    }
    public function update($id, Request $request)
    {
        $informasi = Soal::find($id);
        //    validasi update Soal
        $soalValid = [
            'dosen' => 'required|max:10',
            'nama_mk' => 'required|max:50',
            'jumlah_soal' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ];
        // validasi id untuk id agar tidak sama dengan id yg lain(unique)

        if ($request->id != $informasi->id) {
            $soalValid['id'] = 'required|unique:soal';
        }
        $validatedData = $request->validate($soalValid);
        // end validasi soal
        $informasi->update($request->all());
        // redirect
        return redirect(url('info-soal'));
        // dd($request->all());
    }
}
