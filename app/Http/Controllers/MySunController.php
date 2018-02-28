<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySunController extends Controller
{
    //
    public function getcontroller(){
    	echo "Hello Sun Wellcome Controller";
    }
     public function gettong($so1,$so2){
    	$tong = $so1+$so2;
    	return $tong;
    }
    public function postForm (Request $request){
    	echo $request->name;
    }
}
