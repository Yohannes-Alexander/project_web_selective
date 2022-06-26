<?php

namespace App\Http\Controllers;
use  App\Models\testimoni;
use Illuminate\Http\Request;

class Testimonies extends Controller
{
    public function create(){
        $model = new testimoni;
        return view('v_testimony',compact('model'));

    }

    public function store(Request $request){
        $model = new testimoni;
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->pekerjaan = $request->pekerjaan;
        $model->title = $request->title;
        $model->note = $request->note;
        $model->rate = $request->rate;
        $model->save();
        return redirect('testimoni');

    }

    public function index(){
        $pelamar = \App\Models\testimoni::all();
        return view('v_testimony', compact('pelamar'));
    }

    public function edit($id){
        $model = testimoni::find($id);
        return view('v_testimony',compact('model'));

    }

    public function update(Request $request, $id){
        $model = testimoni::find($id);
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->pekerjaan = $request->pekerjaan;
        $model->title = $request->title;
        $model->note = $request->note;
        $model->rate = $request->rate;
        $model->save();
        return redirect('v_testimony');

    }

    public function destroy($id){
        $model = testimoni::find($id);
        $model->delete();
        return redirect('v_testimony');
    }
}
