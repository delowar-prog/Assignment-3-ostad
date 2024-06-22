<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump" ;
        $age = "75" ;
        $data=['id'=>$id, 'name'=>$name, 'age'=>$age];
        $status_code=200;
        $cookie_name = 'access_token';
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        return response()->json($data,$status_code)->cookie($cookie_name,$value,$minutes,$path,$domain,$secure,$httpOnly);
    }
}
