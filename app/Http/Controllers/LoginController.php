<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function xuly(Request $re)
    {
        $username=$re->username;
        $password=$re->password;
        $kq=DB::table('admin')->where('username',$username)->where('password',$password)->first();
        if($kq){
            Session::put('admin_id',$kq->id);
            Session::put('name',$kq->name);
        return Redirect::to('/dashboard');
        }
        else{
            return Redirect::to('/dang-nhap');
        }
    }
}
