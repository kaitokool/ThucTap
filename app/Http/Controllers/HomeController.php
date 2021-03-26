<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->limit(6)->get();
        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }

    public function shop(){
        $cate_product = DB::table('tbl_category_product')->get();
        $all_product = DB::table('tbl_product')->get();
        return view('pages.shop.shop')->with('category',$cate_product)->with('all_product',$all_product);
    }
}
