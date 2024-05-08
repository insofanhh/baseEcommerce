<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;


class ProductController extends Controller
{
    public function Index(){
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('admin.allproducts', compact('products','categories'));
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.addproduct', compact('categories','subcategories'));
    }

    public function StoreProduct(Request $request){
        $request->validate([
            'product_name'=> 'required|unique:products',
            'quantity'=> 'required',
            'description'=> 'required',
            'first_price'=> 'required',
            'affter_price'=> 'required',
            'product_category_id'=> 'required',
            'product_subcategory_id'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->image->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;

        $category_name = Category::where('id', $category_id)->value('category_name');
        $subcategory_name = Subcategory::where('id', $subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'first_price' => $request->first_price,
            'affter_price' => $request->affter_price,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'image' => $img_url,
            'slug' => strtolower(str_replace(' ','-',$request->product_name))
        ]);
        Category::where('id', $category_id)->increment('product_count',1);
        Subcategory::where('id', $subcategory_id)->increment('product_count',1);

        return redirect()->route('allproducts')->with('message','Product Added Succesfully!');
    }

    public function EditProduct($id){
        $productinfo = Product::findOrFail($id);

        return view('admin.editproduct', compact('productinfo'));
    }

    public function UpdateProduct(Request $request){
        $productid = $request->id;
        $request->validate([
            'product_name'=> 'required|unique:products',
            'quantity'=> 'required',
            'description'=> 'required',
            'first_price'=> 'required',
            'affter_price'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = $request->id;
        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->image->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        Product::findOrFail($id)->update([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'first_price' => $request->first_price,
            'affter_price' => $request->affter_price,
            'image'=> $img_url,
            'slug' => strtolower(str_replace(' ','-',$request->product_name))
        ]);
        return redirect()->route('allproducts')->with('message','Product Edited Succesfully!');
    }

    public function DeleteProduct($id){
        Product::findOrFail($id)->delete();
        $cat_id = Product::where('id', $id)->value('product_category_id');
        $subcat_id = Product::where('id', $id)->value('product_subcategory_id');
        Category::where('id', $cat_id)->decrement('product_count', 1);
        Subcategory::where('id', $subcat_id)->decrement('product_count', 1);

        return redirect()->route('allproducts')->with('message','Product Delete Succesfully!');
    }
    
}