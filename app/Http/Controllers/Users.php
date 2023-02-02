<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    //
     public function index(){

        $data = DB::table('teacher')->get();
        foreach($data as $data)
        {
            echo "<pre>";
            print_r([$data]);
            
        }
    }
}
