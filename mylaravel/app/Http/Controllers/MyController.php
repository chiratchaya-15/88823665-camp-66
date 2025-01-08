<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myprivate(){
        return 1;
    }
    function myfunction(Request $req, $varl=""){
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $varl;
        return view('myview' , $data);
    }
}
