<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getData(Request $request){
        $data = [];
        $data['name'] = $request -> input('name');
        $data['email'] = $request -> input('email');
        $data['pw'] = $request -> input('pw');
        return view('readForm', $data);
    }
}
