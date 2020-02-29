<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\user_model;

class Users extends Controller
{
    //
    function dbCheck(){


        //return user_model::find(2);
       // die();
       // $users=DB::select("select * from Users");
        //print_r($users);
        $users=DB::table('Users')
            //->where('id',2)
            ->get();
        print_r($users);

        $aaa=DB::table('Users')->find(1);
        print_r($aaa);

        DB::table('Users')->where('name','tutul')->delete();

        DB::table('Users')
            ->where('name','afsar')
            ->update([
            'name'=>'afsar111',
            'email'=>'afsar111@gmail.com'
        ]);

        $join=DB::table('Users')
            ->select('Users.name','Users.email','Company.company_name')
            ->join('Company','Users.id','Company.user_id')
            ->get();
        return $join;

    }
}
