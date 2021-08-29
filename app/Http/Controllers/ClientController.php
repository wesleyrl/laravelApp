<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client as Client;

class ClientController extends Controller
{
    //
    public function index(){
        return Client::all();
    }

    public function store(Request $request){
        return Client::create($request->all());
    }

    public function show(int $id){
        return Client::find($id);
    }

    public function delete(int $id){
        return Client::find($id)->delete();
    }
}
