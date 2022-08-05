<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Product;
use Carbon\Carbon;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.admin');
    }

    public function login(Request $request){
        $check = $request->all();

        if(Auth::guard('admin')->attempt([
            'email' => $check['email'],
            'password' => $check['password']
        ])){
            return redirect()->route('admin.dashboard')->with('error','Admin logged in Successfully');
        }
        else{
            return back()->with('error','Invalid Email or Passowrd');
        }
    }

    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error','Admin logged out Successfully');
    }

    public function admin_register(){
        return view('admin.admin_register');
    }

    public function admin_register_create(Request $request){

        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' =>$request->name,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('superadmin.dashboard')->with('error','Admin created Successfully');
    }
    
    public function show_users(){
        $users = DB::table('users')->get();
        
        return view('admin.show_users',['users'=>$users]);
    }
    public function show_orders(){
        $orders = DB::table('orders')->get();// DB::select('select * from products');
        
        return view('admin.show_orders',['orders'=>$orders]);
    }
    public function show_products(){
        $prod = DB::table('products')->get();// DB::select('select * from products');
        
        return view('admin.show_products',['products'=>$prod]);
    }

    public function product_form(){
        return view('admin.product_form');
    }
    public function add_product(Request $request){
        
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');
        $s_price = $request->input('s_price');
        $quantity = $request->input('quantity');
        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('/img/products'), $imageName);
        DB::table('products')->insert([
            'name' => $name,
            'description'=>$description,
            'quantity'=>$quantity,
            'category'=>$category,
            'price'=>$price,
            'sale_price'=>$s_price,
            'image'=>$imageName,
        ]);
       
        $prod = DB::table('products')->get();// DB::select('select * from products');
        
        return view('admin.show_products',['products'=>$prod]);
    }


    public function delete_product($id){
        $product= Product::find($id);
        
        unlink("img/products/".$product->image);

        Product::where("id", $id)->delete();
        // $destinationPath = 'public/img/products';
        // File::delete($destinationPath.'/{{$product->image}}');
        $prod = DB::table('products')->get();// DB::select('select * from products');
        
        return view('admin.show_products',['products'=>$prod]);
    }
  
     public function update_form($id){
        $product= Product::find($id);
        return view('admin.update_form',['product' => $product]);
     }


    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);

        unlink("img/products/".$product->image);

        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('/img/products'), $imageName);
       
             $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->sale_price = $request->input('s_price');
            $product->quantity = $request->input('quantity');
            $product->image = $imageName;
            $product->category = $request->input('category');
         $product->update();
        $prod = DB::table('products')->get();// DB::select('select * from products');
        
        return view('admin.show_products',['products'=>$prod]);
    }


    public function show_payments(){
     
        $payments = DB::table('payments')
            ->join('orders', 'payments.order_id', '=', 'orders.id')
            ->join('items', 'payments.order_id', '=', 'items.order_id')
            ->select('payments.date','payments.transaction_id', 'orders.name','orders.email', 'orders.cost','items.product_name','items.product_image')
            ->get();
       
       return view('admin.show_payments',['data' => $payments]);
    }


    public function stock(){
        $prod = DB::table('products')->get();
        return view('admin.stock',['products'=>$prod]);
    }
}
