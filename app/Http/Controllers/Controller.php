<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function show($id)
    {
        echo "Hello I am Ajay from controller<br>";
        return $id;

    }
    public function test ($user)
    {
        # code...
        return view('about',['user1'=>$user]);
    }
}
