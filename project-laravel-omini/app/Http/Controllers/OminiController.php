<?php

namespace App\Http\Controllers;
use App\Omino;

use Illuminate\Http\Request;

class OminiController extends Controller
{
  public function index(){

    $omini = Omino::all();

    return view('home' , compact('omini'));
  }

  public function show($id){

    $omino = Omino::findOrFail($id);

    return view('showOmino', compact('omino'));
  }

  public function delete($id){
    $omino = Omino::findOrFail($id);

    $omino -> delete();

    return redirect() -> route('home');
  }

  public function create(){
    return view('create-omino');
  }

  public function store(Request $request){

    $data = $request -> all();
    $omino = new Omino;

    $omino -> firstName = $data['firstName'];
    $omino -> lastName = $data['lastName'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phoneNumber = $data['phoneNumber'];
    $omino -> role = $data['role'];

    $omino -> save();

    return redirect() -> route('home');
  }

  public function edit($id){

    $omino = Omino::findOrFail($id);

    return view('edit-omino', compact('omino'));
  }

  public function update(Request $request, $id){

    $data = $request -> all();

    $omino = Omino::findOrFail($id);

    $omino -> firstName = $data['firstName'];
    $omino -> lastName = $data['lastName'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phoneNumber = $data['phoneNumber'];
    $omino -> role = $data['role'];

    $omino -> save();

    return redirect() -> route('home');
  }
}
