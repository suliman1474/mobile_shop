<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Auth\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* ----------------------------------------------Super Admin Routes -------------------------------------------*/

//Route::get('/super_admin',[SuperAdminController::class, 'create'])->name('create_super_admin');

Route::get('super_admin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
Route::get('super_admin/login_form', [SuperAdminController::class, 'super_admin_register'])->name('superadmin.login_form');
Route::post('super_admin/create', [SuperAdminController::class, 'super_admin_create'])->name('superadmin.create');
Route::post('super_admin/login', [SuperAdminController::class, 'login'])->name('superadmin.login');
Route::get('super_admin/logout', [SuperAdminController::class, 'logout'])->name('superadmin.logout');
Route::get('super_admin/delete_admin/{id}', [SuperAdminController::class, 'delete_admin'])->name('superadmin.delete_admin');

Route::group(['prefix' =>'super_admin', 'middleware' => 'superadmin'],function (){
  
   
    /*------------------------super admin--------------------*/
});





/* ----------------------------------------------Super Admin Routes -------------------------------------------*/



/* ---------------------------------------  Admin Routes -------------------------------- */
Route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'index'])->name('login_from');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/register', [AdminController::class, 'admin_register'])->name('admin.register')->middleware('superadmin');

    Route::post('/register/create', [AdminController::class, 'admin_register_create'])->name('admin.register.create')->middleware('superadmin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    /*------------------------super admin--------------------*/
    Route::get('/show_products',[AdminController::class,'show_products'])->name('show_products');
    Route::get('/product_form',[AdminController::class,'product_form'])->name('product_form');
    Route::get('/update_form/{id}',[AdminController::class,'update_form'])->name('update_form');
    Route::post('/add_product',[AdminController::class,'add_product'])->name('add_product');
    Route::put('/update_product/{id}',[AdminController::class,'update_product'])->name('update_product');
    Route::get('/delete_product/{id}',[AdminController::class,'delete_product'])->name('delete_product');

    Route::get('/show_orders',[AdminController::class,'show_orders'])->name('show_orders');
    Route::get('/show_users',[AdminController::class,'show_users'])->name('show_users');
    Route::get('/show_payments',[AdminController::class,'show_payments'])->name('show_payments');
    Route::get('/stock',[AdminController::class,'stock'])->name('stock');

});



/* ---------------------------------------  Admin Routes ends -------------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';



// projectController routes
Route::controller(ProjectController::class)->group(function(){
    Route::post('/', 'home')->name('home');
    Route::get('/', 'home')->name('home');
    Route::get('/home', 'show')->name('index');
    Route::get('/products', 'show');
    Route::get('/single_product/{id}', 'single_product')->name('single_product');
    
    
});


// Cart controllers
Route::controller(CartController::class)->group(function () {
    Route::post('/remove_from_cart','remove_from_cart')->name('remove_from_cart');
    Route::post('/edit_product_quantity','edit_product_quantity')->name('edit_product_quantity');
    Route::post('/add_to_cart','add_to_cart')->name('add_to_cart');

    Route::get('/remove_from_cart' , function(){
        return redirect('/');
    });
    
    Route::get('/edit_product_quantity' , function(){
        return redirect('/');
    });
    Route::get('/place_order' , function(){
        return redirect('/');
    });
});


//below routes will be authenticated .....................

Route::middleware('auth')->group(function (){
    Route::post('/place_order',[CartController::class,'place_order'])->name('place_order');
    Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
    Route::get('/place_order');
});




// The following routes are all authenticatd with auth route .. and is group by PaymentController::class
Route::middleware('auth')->group(function (){
    Route::controller(PaymentController::class)->group(function () {
        Route::get('/verify_payment/{transaction_id}','verify_payment')->name('verify_payment');
        Route::get('/complete_payment','complete_payment')->name('complete_payment');
        
        Route::get('/thank_you','thank_you')->name('thank_you');
        
        
    });
} );









/* --------------------------------------------------------------- routes -----------------------------------------*/


