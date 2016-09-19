<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MaeController extends Controller
{
    public function index(){
        return view('mae.Home');
    }
}
