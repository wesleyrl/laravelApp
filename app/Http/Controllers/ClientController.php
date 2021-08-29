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
}
