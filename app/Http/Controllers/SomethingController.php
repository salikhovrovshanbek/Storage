<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomethingController extends Controller
{
    public function viewLoad()
    {
        $data=['Sanjar','Ilyos','Nosir','Obid','Jamshid','Odil','Rovshan'];
        return view('smth',['users'=>$data]);
    }
    public function getData(Request $req){
        return $req->input();
    }
}
