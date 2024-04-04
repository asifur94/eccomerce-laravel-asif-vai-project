<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowproductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::middleware("authadmin")->group(function () {

    //Language Translation
    Route::get('admin/index/{locale}', [HomeController::class, 'lang']);

    Route::get('admin/', [HomeController::class, 'root'])->name('root');

    //Update User Details
    Route::post('admin/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::post('admin/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');


    Route::resource('admin/products',ProductController::class)
                                                ->except([
                                                    "show",
                                                    "store",
                                                    "create"
                                                ]);

    Route::resource("admin/users",UserController::class);
    Route::resource("admin/orders",OrderController::class);

    Route::get("/mobileactive",[ProductController::class,"getProductMobileActive"])
                                                    ->name("mobileactive");
    Route::resource('/order',OrderController::class);
});


Route::get("admin/login",[UserController::class,"loginView"])->name("admin.login");
Route::post("user/register",[UserController::class,"store"])->name("user.register");

Route::get("user/login",[UserController::class,"loginUser"])->name("user.login");

Route::post("/login",[UserController::class,"loginAction"])->name("login");

Route::get("/logout",[UserController::class,"logoutAction"])->name("logout");

Route::get("/",[ShowproductController::class,"showproduct"])->name(("home"));

Route::get("/product/{id}",[ShowproductController::class,"singleProduct"])
                            ->name("singleProduct");

Route::get("user/register",function(){
    return view("home.register");
})->name("register");

Route::get("user/account",[ShowproductController::class,"userAccount"])
                            ->name("user.account");

Route::post('/cart/add',[CartController::class,"addItem"])->name('cart.add');
Route::get('/cart', [CartController::class,"show"])->name('cart.show');
Route::post('/cart/decrease', [CartController::class,"decreaseQty"]);
Route::post('/cart/remove',[CartController::class,"removeItem"])->name('cart.remove');

Route::post('/user/order',[OrderController::class,"store"]);


