<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;

class dashUser extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        $model = new User;
        return view('v_add_user',compact('model'));
    }

    public function store(Request $request){
        $model = new User;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect('dash_user');

    }

    public function index(){
        $pelamar = \App\Models\User::all();
        return view('v_dash_user', compact('pelamar'));
    }

    public function edit($id){
        $model = User::find($id);
        return view('v_edit_user',compact('model'));

    }

    public function update(Request $request, $id){
        $model = User::find($id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect('dash_user');

    }

    public function destroy($id){
        $model = User::find($id);
        $model->delete();
        return redirect('dash_user');
    }
}
