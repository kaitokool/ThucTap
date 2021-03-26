<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
    	return view('admin_login');
    }

    public function show_dashboard(){
        $this->AuthLogin();
    	return view('admin.dashboard');
    }

    public function dashboard(Request $request){
        $data = $request->all();
        $admin_name = $data['admin_name'];
        $admin_password = md5($data['admin_password']);
        $login = DB::table('tbl_admin')->where('admin_name', $admin_name)->where('admin_password', $admin_password)->first();
        if($login){
            session()->put('admin_name',$login->admin_name);
            session()->put('admin_id',$login->admin_id);
            return Redirect::to('/dashboard');
        }else{
            session()->put('message','Mật khẩu hoặc tài khoản bị sai.Vui lòng nhập lại');
            return Redirect::to('/admin');
        }
    }

    public function logout(){
        $this->AuthLogin();
        session()->put('admin_name',null);
        session()->put('admin_id',null);
        return Redirect::to('/admin');
    }
}
