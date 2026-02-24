<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getData(Request $request){
        $request -> validate([
            'name' => 'required|string|min:2',
            'pw' => 'required|min:8|max:55',
            'email' => 'required|email',
            'pw2' => 'required|same:pw',
            'tele' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8'
        ], [
            'name.required' => 'Name field is required..',
            'pw.required' => 'Password field is required..',
            'email.required' => 'Email field is required..',
            'email.email' => 'Email field must be email adresse..',
            'pw2.required' => 'Confirm password field is required..',
            'pw2.same' => 'the password must be the same..',
            'tele.required' => 'telephone field is required..',
            'tele.regex' => 'Telephone must be a telephone..'
        ]);
        $data = [];
        $data['name'] = $request -> input('name');
        $data['email'] = $request -> input('email');
        $data['tele'] = $request -> input('tele');
        $data['pw'] = $request -> input('pw');
        return view('readForm', $data);
    }
}
