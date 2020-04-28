<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function new_cart_ajax(Request $re)
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        return view('cart.new_cart')->with('cata',$cata)->with('pro',$pro);
    }
    public function add_cart_ajax(Request $re)
    {
        
        $data=$re->all();
        $session_id=substr(md5(microtime()),rand(0,26),5);
        $cart=Session::get('cart');
      if($cart==true){
          $kiemtradethem=0;
            foreach($cart as $key=>$c){
              if($c['cart_id']==$data['cart_id'])  {
                $kiemtradethem ++;
              }
            }
            if($kiemtradethem == 0){
                $cart[]=array(
                    'session_id'=> $session_id,
                    'cart_name'=> $data['cart_name'],
                    'cart_id'=> $data['cart_id'],
                    'gia'=> $data['gia'],
                    'soluong'=> $data['soluong'],
                    'hinhanh'=> $data['hinhanh']
                   
              );
              Session::put('cart',$cart);
            } 
      }
      else{
          $cart[]=array(
                'session_id'=> $session_id,
                'cart_name'=> $data['cart_name'],
                'cart_id'=> $data['cart_id'],
                'gia'=> $data['gia'],
                'soluong'=> $data['soluong'],
                'hinhanh'=> $data['hinhanh']

          );
      }
      Session::put('cart',$cart);
      Session::save();
        
    }

public function xoa_cart_ajax($session_id)
{
    $cart=Session::get('cart');
    if($cart){
        foreach($cart as $key=>$value){
            if($value['session_id']==$session_id){
                unset($cart[$key]);
            }
        }
        Session::put('cart',$cart);
        return Redirect()->back();
    }

    
}
    // public function save_cart(Request $re)
    // {
    //     $qty=$re->qty;
    //     $booze_id=$re->booze_id_hidden;
    //     $booze_if=DB::table('booze')->where('booze_id',$booze_id)->first();

    //     $data['id']=$booze_if->booze_id;
    //     $data['qty']=$qty;
    //     $data['name']=$booze_if->booze_name;
    //     $data['price']=$booze_if->booze_price;
    //     $data['weight']='123';
    //     $data['options']['image']=$booze_if->booze_img;
    //     Cart::add($data);
    //     $cata=DB::table('catalog')->get();
    //     $pro=DB::table('producer')->get();
    //     return Redirect::to('/show-C');
     
    // }
    // public function show_C()
    // {
    //     $cata=DB::table('catalog')->get();
    //     $pro=DB::table('producer')->get();
    //     return view('cart.showCart')->with('cata',$cata)->with('pro',$pro);
    // }
    // public function xoa_cart($rowId)
    // {
    //     Cart::update($rowId,0);

    //     return Redirect::to('/show-C');
    // }
 
}
