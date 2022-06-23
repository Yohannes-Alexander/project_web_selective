<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\pelamar;

class Pekerjaann extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function Pekerjaann(){
        $pelamar = pelamar::latest();
        if(request('search')){
            $pelamar->where("name", 'like', '%'.request('search'). '%');
            // echo (request('search'));
        }
        return view('v_career', ['pelamar' => $pelamar->latest()->get()]);
    }

    public function Pekerjaan_detail(pelamar $pelamar){
        return view('v_career_detail', ['pelamar' => $pelamar]);
    }

    public function Pekerjaan_dash(){
        $pelamar = \App\Models\pelamar::all();
        return view('v_dash_makanan', ['pelamar' => $pelamar]);
    }

    public function create(){
        $model = new pelamar;
        return view('v_add_pelamar',compact('model'));

    }

    public function store(Request $request){
        $model = new pelamar;
        $model->name = $request->name;
        $model->gaji = $request->gaji;
        $model->cabang = $request->cabang;
        $model->note = $request->note;
        $model->save();
        return redirect('dash_makanan');

    }

    public function index(){
        $pelamar = \App\Models\pelamar::latest();
        if(request('search')){
            $pelamar->where('name', 'like', '%'.request('search'). '%');
        }
        return view('v_career', compact('pelamar'));
    }

    public function edit($id){
        $model = pelamar::find($id);
        return view('v_edit_pelamar',compact('model'));

    }

    public function update(Request $request, $id){
        $model = pelamar::find($id);
        $model->name = $request->name;
        $model->gaji = $request->gaji;
        $model->cabang = $request->cabang;
        $model->note = $request->note;
        $model->save();
        return redirect('dash_makanan');

    }

    public function destroy($id){
        $model = pelamar::find($id);
        $model->delete();
        return redirect('dash_makanan');

    }
}