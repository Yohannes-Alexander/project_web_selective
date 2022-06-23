<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Loker;

class Pelamar extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        $model = new Loker;
        return view('v_add_loker',compact('model'));

    }

    public function store(Request $request){
        $model = new Loker;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->note = $request->note;
        $model->loker = $request->loker;
        $model->save();
        return redirect('dash_pelamar');

    }

    public function index(){
        $pelamar = \App\Models\Loker::all();
        return view('v_dash_pelamar', compact('pelamar'));
    }

    public function edit($id){
        $model = Loker::find($id);
        return view('v_edit_loker',compact('model'));

    }

    public function update(Request $request, $id){
        $model = Loker::find($id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->note = $request->note;
        $model->loker = $request->loker;
        $model->save();
        return redirect('dash_pelamar');

    }

    public function destroy($id){
        $model = Loker::find($id);
        $model->delete();
        return redirect('dash_pelamar');
    }
}
