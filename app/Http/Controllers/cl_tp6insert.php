<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cl_tp6insert extends Controller
{
    public function getDataFromDB(){
        $m = DB::select('select * from Module');
        return view('readData', ["modules" => $m]);
    }

    public function InsertData(Request $request){
        $request->validate([
            'codem' => 'required',
            'titrem' => 'required',
            'mh' => 'required'
        ]);
        $codem = $request -> codem;
        $titre = $request -> titrem;
        $mh = $request -> mh;
        $n = DB::insert('insert into Module values(?, ?, ?)', [$codem, $titre, $mh]);
        return redirect('/');
    }
    
    public function updateData($code){
        $m = DB::select('select * from module where CodeM=?', [$code]);
        return view('modifierModule', ["mod" => $m]);
    }

    public function savaData(Request $request){
        $codem = $request -> codem;
        $titre = $request -> titrem;
        $mh = $request -> mh;

        $n = DB::update('update module set CodeM=?, titre=?, masseH=? where codem=?', [$codem, $titre, $mh, $codem]);
        return redirect('/');
    }

    public function deleteData($code){
        $m = DB::delete('delete from module where codem=?', [$code]);
        return redirect('/');
    }

    public function rechercher(Request $request){
        $codem = $request -> codem;
        $m = DB::select('select * from module where codem=?', [$codem]);
        return view('readData', ["mod" => $m]);
    }
}
