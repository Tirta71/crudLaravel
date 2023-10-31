<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
{
    if ($request->has('search')) {
        $keyword = $request->search;
        $data = Mahasiswa::where('nama', 'LIKE', '%' . $keyword . '%')->get();

        if ($data->isEmpty()) {
           
            return view('dataMahasiswa', compact('data'))->with('error', 'Tidak ada data yang ditemukan.');
        }
    } else {
        $data = Mahasiswa::all();
    }

    return view('dataMahasiswa', compact('data'));
}



    public function tambahmahasiswa (){
        return view('tambahData');
    }

    public function insertData (Request $request){
        
       $data =  Mahasiswa::create($request-> all());
       if($request -> hasFile('foto')){
            $request -> file('foto')-> move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data -> foto =  $request -> file('foto')->getClientOriginalName();
            $data -> save();
       } 
       return redirect()->route('mahasiswa')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilData($id){
        $data = Mahasiswa::find($id);
    
        return view('tampilData',compact('data'));
    }

    public function updateData(Request $request, $id){
        $data =Mahasiswa::find($id);
        $data -> update($request->all());
        return redirect()->route('mahasiswa')-> with('success','Data Berhasil Di update');
    }

    public function delete($id)  {
        $data = Mahasiswa::find($id);
        $data -> delete();
        return redirect()->route('mahasiswa')-> with('success','Data Berhasil Di hapus');
    }


}
