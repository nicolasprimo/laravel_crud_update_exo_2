<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $data = Membre::all();
        return view('membres',compact('data'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $newEntry = new Membre();
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry->save();
        return redirect()->back();
    }
    public function show($id){
        $show = Membre::find($id);
        return view('showMembre',compact('show'));
    }
    public function edit($id){
        $edit= Membre::find($id);
        return view("edit",compact('edit'));
    }
    public function update($id,Request $request){
        $user= Membre::find($id);
        $user->nom=$request->nom;
        $user->age=$request->age;
        $user->genre=$request->genre;
        $user->save();
        return redirect('/show-membre'.'/'.$user->id);
    }
    public function delete($id){
        $delete_user = Membre::find($id);
        $delete_user->delete();
        return redirect('/');
    }
    public function destroy(){
        Membre::truncate();
        return redirect('/');
    }
}

