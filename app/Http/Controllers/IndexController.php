<?php

namespace App\Http\Controllers;

use App\CategoryNews; // inlcude model vao controller
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function getCreateCategoryNew()
    {
        return view('create');
    }
    public function postCreateCategoryNew(Request $request)
    {
        $category       = new CategoryNews(); // tao moi 1 class model
        $category->name = $request->name;
        if ($category->save()) {
            echo "success";
        } else {
            echo "fail";
        }
    }
}
