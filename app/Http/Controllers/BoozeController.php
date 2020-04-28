<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BoozeController extends Controller
{
    public function booze()
    {
        $booze=DB::table('booze') 
        ->join('catalog','catalog.catalog_id','=','booze.catalog_id')
        ->join('producer','producer.producer_id','=','booze.producer_id')->get();
        return view('admin.booze')->with('booze',$booze);
    }
    public function them_booze()
    {
        $pro=DB::table('producer')->get();
        $cata=DB::table('catalog')->get();
        return view('admin.themBooze')->with('pro',$pro)->with('cata',$cata);
    }
    public function add_booze(Request $re)
    {
        $data=array();
        $data['booze_name']=$re->booze_name;
        $data['booze_des']=$re->booze_des;
        $data['booze_price']=$re->booze_price;
        $data['booze_discount']=$re->booze_discount;
        $data['catalog_id']=$re->catalog;
        $data['producer_id']=$re->producer;
        $get_img = $re->file('booze_img');
        if($get_img){

            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/',$new_img);
            $data['booze_img'] = $new_img;   
            }
            else{
                $data['booze_img'] = '';       
            }
        DB::table('booze')->insert($data);
        return Redirect::to('/booze');
    }
    public function sua_booze($booze_id)
    {
        $pro=DB::table('producer')->get();
        $cata=DB::table('catalog')->get();
        $edit=DB::table('booze')->where('booze_id',$booze_id)->get();
        return view('admin.suaBooze')->with('edit',$edit)->with('pro',$pro)->with('cata',$cata); 
    }
    public function edit_booze(Request $re, $booze_id)
    {
        $data=array();
        $data['booze_name']=$re->booze_name;
        $data['booze_des']=$re->booze_des;
        $data['booze_price']=$re->booze_price;
        $data['booze_discount']=$re->booze_discount;
        $data['catalog_id']=$re->catalog;
        $data['producer_id']=$re->producer;
        $get_img = $re->file('booze_img');
        if($get_img){

            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/',$new_img);
            $data['booze_img'] = $new_img;   
            }
        DB::table('booze')->where('booze_id',$booze_id)->update($data);
        return Redirect::to('/booze');
    }
    public function xoa_booze($booze_id){
       
        DB::table('booze')->where('booze_id',$booze_id)->delete();
        return Redirect::to('booze');
    }

}
