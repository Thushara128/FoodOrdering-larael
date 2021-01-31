<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function list(){
        $data= Product::all();
        return view('List',["data"=>$data]);
    }
    function delete($id){
        Restaurent::find($id)->delete();
       Session::flash('status','Deleted successfully');
       return redirect('list');
   }
    function productdetail($id){
        $data = Product::find($id);
        return view('productdetail',['product'=>$data]);  
    }
    function search(Request $req){
        $data = Product:: 
        where('description','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
       }
       function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();

            return redirect('/');
        }else{
            return redirect('login');
        }
        
    }
    static function cartitem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList()
    {
       
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }
    function removecart($id){
        Cart::destroy($id);
          return redirect('cartlist');
      }

      function ordernow(){
        $userId=Session::get('user')['id'];
      $total=  $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.id as cart_id')
         ->sum('products.price');
         return view('ordernow',['total'=>$total]);
    }
    function orderplace(Request $req){
        $userId=Session::get('user')['id'];
    $allcart=Cart::where('user_id',$userId)->get();
    foreach($allcart as $cart){
        $order=new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_status=$req->payment;
        $order->payment_method="pending";
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
        

    }
     $req->input();
     return redirect('/');
    }
    
    function myorder(){
        $userId=Session::get('user')['id'];
         $myorder=DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
        ->get();
         return view('myorder',['order'=>$myorder]);
    }
    
    function sentmail(){
        $userId=Session::get('user')['id'];
        return Cart::where('available',$userId)->get();
        if($product<=2){
            $details=[
                'title'=>'mail from admin',
                'body'=>'Your products are ery less,Please add more Items'
            ];
            Mail::to('contact@subdine.com')->send(new \App\Mail\Sentmail($details));
            return "Email Sent";
        }
        
    }
}
