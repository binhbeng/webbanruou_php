<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class LoaiController extends Controller
{
    public function loai_ruou()
    {
        $loai=DB::table('catalog')->get();
        return view('admin.loaiRuou')->with('loai',$loai);
    }
    public function them_loai_ruou()
    {
        return view('admin.themLoaiRuou');
    }
    public function add_catalog(Request $re)
    {
        $data=array();
        $data['catalog_name']=$re->catalog_name;
        $data['catalog_des']=$re->catalog_des;
        DB::table('catalog')->insert($data);
        return Redirect::to('/loai-ruou');
       
    }
    public function sua_loai_ruou( $catalog_id)
    {
        $edit=DB::table('catalog')->where('catalog_id',$catalog_id)->get();
        return view('admin.suaLoaiRuou')->with('edit',$edit);
       
    }
    public function edit_catalog(Request $re,$catalog_id)
    {
        $data=array();
        $data['catalog_name']=$re->catalog_name;
        $data['catalog_des']=$re->catalog_des;
        DB::table('catalog')->where('catalog_id',$catalog_id)->update($data);
        return Redirect::to('/loai-ruou');
       
    }
    public function xoa_loai_ruou($catalog_id)
    {
        
        DB::table('catalog')->where('catalog_id',$catalog_id)->delete();
        return Redirect::to('/loai-ruou');
       
    }
}
