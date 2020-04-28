<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckController extends Controller
{
    public function dang_ky()
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        return view('home.dang_ky')->with('cata',$cata)->with('pro',$pro);
    }
    public function dang_nhap()
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        return view('home.dang_nhap')->with('cata',$cata)->with('pro',$pro);
    }
    public function them_kh(Request $re)
    {
        $data=array();
        $data['customer_id']=$re->customer_id;
        $data['customer_name']=$re->customer_name;
        $data['customer_password']=$re->customer_password;
        $data['customer_email']=$re->customer_email;
        $data['customer_phone']=$re->customer_phone;
        
        DB::table('customer')->insert($data);
        return Redirect::to('/dang-nhap2') ;

    }
    public function thanhtoan()
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
       
        return view('home.thanhtoan')->with('cata',$cata)->with('pro',$pro);
    }
    public function info(Request $re)
    {
        $data=array();
        $data['info_name']=$re->info_name;
        $data['info_address']=$re->info_address;
        $data['info_phone']=$re->info_phone;
        $data['info_notes']=$re->info_notes;
        $data['customer_id']=$re->customer_id;
        $data['payment']=$re->payment;
        $data['status']='Chưa xử lý';
        $haha=DB::table('info')->insertGetId($data);
        $content=Session::get('cart');
        foreach($content as $v){
                $info_details_data['info_id']=$haha;
                $info_details_data['booze_id']=$v['cart_id'];
                $info_details_data['booze_name']=$v['cart_name'];
                $info_details_data['booze_qty']=$v['soluong'];
                $info_details_data['booze_price']=$v['gia'];
                DB::table('info_details')->insert($info_details_data);
        }
        return Redirect::to('/info-details');
        
    }    
    public function info_details(Request $re)
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        return view('home.info_details')->with('cata',$cata)->with('pro',$pro);
    }

    public function dang_xuat()
    {
        Session::flush();
        // Session::put('customer_id',null);
        // Session::put('customer_name',null);
        return Redirect::to('/home');
    }
    public function xuly2(Request $re)
    {
        $customer_email=$re->customer_email;
        $customer_password=$re->customer_password;
        $kq2=DB::table('customer')->where('customer_email',$customer_email)
        ->where('customer_password',$customer_password)->first();
        if($kq2){
            Session::put('customer_id',$kq2->customer_id);
            Session::put('customer_name',$kq2->customer_name);
            return Redirect::to('/home');
        }
        else{
            return Redirect::to('/dangnhap2');
        }

    }

// manage

    public function manage()
    {
        $hi=DB::table('customer')->join('info','customer.customer_id','=','info.customer_id')
        ->get();
        // echo '<pre>';
        // print_r($hi);
        // echo '</pre>';
       return view('/admin.manage')->with('hi',$hi);
    }

    public function chitiethoadon($info)
    {
        $ha=DB::table('info_details')
        ->where('info_id',$info)
        ->get();
       
        //   echo '<pre>';
        // print_r($results);
        // echo '</pre>';
          
      return view('/admin.chitiethoadon')->with('ha',$ha);
    }

    public function status(Request $re)
    {  $st=array();
         $st['status']=$re->status;
       DB::table('info')->where('info_id',$re->info_id)->update($st);
       return Redirect::to('/manage');
    }
}
