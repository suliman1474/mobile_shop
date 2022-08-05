<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProjectController extends Controller
{
    public function test(){
        $prod = DB::table('products')->get();// DB::select('select * from products');
        
        return view('test',['products'=>$prod]);
    }
    public function show(){

        $prod = DB::table('products')->paginate(4);// DB::select('select * from products');
        return view('products',['products'=>$prod]);
    }

    public function home(){
        $prod = DB::table('products')->get();// DB::select('select * from products');
        return view('index',['products'=>$prod]);
    }

    public function single_product(Request $request , $id){
        $prod = DB::table('products')-> where('id',$id)->get();
        return view('single_product',['item'=>$prod]);
    }
    public function show_test(){
        $prod = DB::select('select * from products');
       // return view('test',['products'=>$prod]);
    }

   
}
