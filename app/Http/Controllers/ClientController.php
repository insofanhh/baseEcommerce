<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ShippingInfo;
use App\Models\Order;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id){
        $category = Category::findOrFail($id);
        $products = Product::where('product_category_id', $id)->latest()->get();
        return view('users.category', compact('category','products'));
    }
    
    public function SingleProduct($id){
        $product = Product::findOrFail($id);
        $subcat_id = Product::where('id', $id)->value('product_subcategory_id');
        $related_products = Product::where('product_subcategory_id', $subcat_id)->latest()->get();
        return view('users.product', compact('product','related_products'));
    }

    public function AddToCart(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        return view('users.addtocart', compact('cart_items'));
    }

    public function AddProductToCart(Request $request){
        $product_price = $request->affter_price;
        $quantity = $request->quantity;
        $price = $product_price * $quantity;
       Cart::insert([
        'product_id' => $request->product_id,
        'user_id' => Auth::id(),
        'quantity' => $request->quantity,
        'price' => $price
       ]);
       return redirect()->route('addtocard')->with('message','Your item add to cart succesfully!');
    }

    public function RemoveCartItem($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('addtocard')->with('message','Your item removed succesfully!');
    }

    public function ShippingAddress(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        return view('users.shippingaddress',compact('cart_items'));
    }

    public function AddShippingAddress(Request $request){
        ShippingInfo::insert([
            'user_id' => Auth::id(),
            'phone' => $request->phone,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'note'=> $request->note
        ]);
        return redirect()->route('checkout');
    }

    public function Checkout(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        $shippingaddress = ShippingInfo::where('user_id', $userid)->first();
        
        return view('users.checkout', compact('cart_items','shippingaddress'));
    }

    public function PlaceOrder(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        $shippingaddress = ShippingInfo::where('user_id', $userid)->first();

        foreach ($cart_items as $item) {
            Order::insert([
                'userid' => $userid,
                'shipping_phoneNumber' => $shippingaddress->phone,
                'shipping_city' => $shippingaddress->city,
                'shipping_postCode' => $shippingaddress->postcode,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'total_price' => $item->price
            ]); 

            $id = $item->id;
            Cart::findOrFail($id)->delete();
        }

        ShippingInfo::where('user_id', $userid)->first()->delete();
        //Xoa dia chi sau khi submit

        return redirect()->route('pendingorder')->with('message','Your order has been placed succesfully!');

    }

    public function UserProfile(){
        return view('users.userprofile');
    }

    public function PendingOrder(){
        $pending_orders = Order::where('status','pending')->latest()->get();
        return view('users.pendingorder', compact('pending_orders'));
    }

    public function History(){
        return view('users.history');
    }
    
    public function NewReleases(){
        return view('users.newreleases');
    }

    public function About(){
        return view('users.about');
    }

    public function Blog(){
        return view('users.blog');
    }

    public function Contact(){
        return view('users.contact');
    }
}