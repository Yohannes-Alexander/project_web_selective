<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\testimoni;


class Testimony extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        $model = new testimoni;
        return view('v_add_testimoni',compact('model'));

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
        return redirect('dash_testimoni');

    }

    public function index(){
        $pelamar = \App\Models\testimoni::all();
        return view('v_dash_testimoni', compact('pelamar'));
    }

    public function edit($id){
        $model = testimoni::find($id);
        return view('v_edit_testimoni',compact('model'));

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
        return redirect('dash_testimoni');

    }

    public function destroy($id){
        $model = testimoni::find($id);
        $model->delete();
        return redirect('dash_testimoni');
    }
}
