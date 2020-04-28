<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProducerController extends Controller
{
    public function producer()
    {
        $pro=DB::table('producer')->get();
        return view('admin.producer')->with('pro',$pro);
    }
    public function them_producer()
    {
        return view('admin.themProducer');
    }
    public function add_producer(Request $re)
    {
        $data=array();
        $data['producer_name']=$re->producer_name;
        $data['producer_address']=$re->producer_address;
        $data['producer_des']=$re->producer_des;
        DB::table('producer')->insert($data);
        return Redirect::to('/producer');
       
    }
    public function sua_producer( $producer_id)
    {
        $edit=DB::table('producer')->where('producer_id',$producer_id)->get();
        return view('admin.suaProducer')->with('edit',$edit);
       
    }
    public function edit_producer(Request $re,$producer_id)
    {
        $data=array();
        $data['producer_name']=$re->producer_name;
        $data['producer_address']=$re->producer_address;
        $data['producer_des']=$re->producer_des;
        DB::table('producer')->where('producer_id',$producer_id)->update($data);
        return Redirect::to('/producer');
    }
    public function xoa_producer($producer_id)
    {
        
        DB::table('producer')->where('producer_id',$producer_id)->delete();
        return Redirect::to('/producer');
       
    }
}
