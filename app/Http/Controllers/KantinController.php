<?php

namespace App\Http\Controllers;

use App\Models\Kantin;
use Illuminate\Http\Request;

class KantinController extends Controller
{
    public function index(){
        $data = Kantin::all();
        // dd($data);
        return view('datakantin', compact('data'));
    }

    public function tambahdatakantin(){
        return view('tambahdatakantin');
    }

    public function insertdatakantin(Request $request){
        // dd($request->all());
        $data = Kantin::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotokantin/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kantins')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampildatakantin($id){

        $data = Kantin::find($id);
        // dd($data);
        return view('tampildatakantin', compact('data'));
    }

    public function updatedatakantin(Request $request, $id){
        $data = Kantin::find($id);
        $data->update($request->all());
        return redirect()->route('kantins')->with('success','Data Berhasil DiUpdate');
    }

    public function deletedatakantin($id){
        $data = Kantin::find($id);
        $data->delete();
        return redirect()->route('kantins')->with('success','Data Berhasil DiHapus');
    }
}
