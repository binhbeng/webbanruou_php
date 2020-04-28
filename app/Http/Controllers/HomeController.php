<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function home()
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        $booze=DB::table('booze')->get();
        return view('home.home')->with('cata',$cata)->with('pro',$pro)->with('booze',$booze);
    }
    public function theo_catalog($catalog_id)
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        $booze=DB::table('booze') 
        ->join('catalog','catalog.catalog_id','=','booze.catalog_id')
        ->join('producer','producer.producer_id','=','booze.producer_id')->where('booze.catalog_id',$catalog_id)->get();
        $cta=DB::table('catalog')->where('catalog_id',$catalog_id)->limit(1)->get();
        return view('home.theoCatalog')->with('booze',$booze)->with('cata',$cata)->with('pro',$pro)->with('cta',$cta);
    }
    public function theo_producer($producer_id)
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        $booze=DB::table('booze') 
        ->join('catalog','catalog.catalog_id','=','booze.catalog_id')
        ->join('producer','producer.producer_id','=','booze.producer_id')->where('booze.producer_id',$producer_id)->get();
        $pp=DB::table('producer')->where('producer_id',$producer_id)->limit(1)->get();
        return view('home.theoProducer')->with('booze',$booze)->with('cata',$cata)->with('pro',$pro)->with('pp',$pp);
    }
    public function details($booze_id)
    {
        $cata=DB::table('catalog')->get();
        $pro=DB::table('producer')->get();
        $booze=DB::table('booze') 
        ->join('catalog','catalog.catalog_id','=','booze.catalog_id')
        ->join('producer','producer.producer_id','=','booze.producer_id')->where('booze.booze_id',$booze_id)->get();
        

         foreach($booze as $key=>$k)
        {
            $ctl_id= $k->catalog_id;
        }
       $goiy=DB::table('booze') 
       ->join('catalog','catalog.catalog_id','=','booze.catalog_id')
       ->join('producer','producer.producer_id','=','booze.producer_id')
       ->where('catalog.catalog_id',$ctl_id)
       ->whereNotIn('booze.booze_id',[$booze_id])->get();
        return view('home.details')->with('booze',$booze)->with('cata',$cata)->with('pro',$pro)->with('goiy',$goiy);
    }
        public function timkiem(Request $re)
        {
            $cata=DB::table('catalog')->get();
            $pro=DB::table('producer')->get();
            $booze=DB::table('booze')->where('booze_name','like','%'.$re->timkiem.'%')
            ->orWhere('booze_des','like','%'.$re->timkiem.'%')->get();
            return view('home.timkiem')->with('cata',$cata)->with('pro',$pro)->with('booze',$booze);
        }
        public function binhluan(Request $re)
        {
            $bl=array();
            $bl['nguoi_bl']=$re->name;
            $bl['noidung']=$re->cm;
            $bl['booze_id']=$re->booze_id;
            DB::table('binhluan')->insert($bl);
        }
}
