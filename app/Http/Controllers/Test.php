<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
  function index(){
      echo "In test controller and index method <a href='/new'>New File</ahref>";
  }

  function check(Request $request){
      print_r($request->input());
      print_r($request->method());
  }

  function formSubmit(Request $req){
      $req->validate([
          'email'=>"bail | required | email ",
          'user'=>"required |max:5 ",


      ]);
      print_r($req->input());
  }


}
