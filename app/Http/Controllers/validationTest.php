<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class validationTest extends Controller
{
    function index(){
        return view("login");
    }
    function SubmitLogin(StoreBlogPost $request){

        $validated = $request->validated();

        print_r($request->input());
    }
}
