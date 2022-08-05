<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\SuperAdmin;
use App\Models\Admin;
use App\Models\Product;
use Carbon\Carbon;


class SuperAdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        $admins = DB::table('admins')->get();
        return view('super_admin.dashboard',['admins' => $admins]);
    }

    public function login(Request $request){
        $check = $request->all();
       
        
        if(Auth::guard('superadmin')->attempt([
            'email' => $check['email'],
            'password' => $check['password'],
            ])){
            
            return redirect()->route('superadmin.dashboard');
        }
        else{
            return back()->with('error','Invalid Email or Passowrd');
        }
    }

    public function logout(){

        Auth::guard('superadmin')->logout();
        return view('super_admin.login_form');
    }

    public function super_admin_register(){
        return view('super_admin.login_form');
    }

   
    public function super_admin_create(Request $request){

        SuperAdmin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' =>$request->name,
            'created_at' => Carbon::now(),
        ]);

        return view('super_admin.dashboard');
    }
    



public function delete_admin($id){
    $admin= Admin::find($id);
        

    Admin::where("id", $id)->delete();
   
    $admins = DB::table('admins')->get();
    return view('super_admin.dashboard',['admins' => $admins,'error' =>'Admin Deleted Successfully']);
}
   

}
