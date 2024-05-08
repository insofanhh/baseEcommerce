<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    public function Index(){
        $allsubcategory = Subcategory::latest()->get();
        $categories = Category::latest()->get();
        return view('admin.allsubcategory',compact('categories','allsubcategory'));
    }

    public function AddSubCategory(){
        
        return view('admin.addsubcategory');
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name'=> 'required|unique:subcategories',
            'category_id' => 'required',
        ]);
        $categories_id = $request->category_id;
        $categories_name = Category::where('id', $categories_id)->value('category_name');

        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace('','-', $request->subcategory_name)),
            'category_id' => $categories_id,
            'category_name' => $categories_name
        ]);

        Category::where('id', $categories_id)->increment('subcategory_count',1);

        return redirect()->route('allsubcategory')->with('message','Sub Category added Succesfully!');
    }

    public function EditSubCategory($id){
        $subcategoryinfo = Subcategory::findOrFail($id);

        return view('admin.editsubcategory',compact('subcategoryinfo'));
    }

    public function UpdateSubCategory(Request $request){
        $request->validate([
            'subcategory_name' => 'required|unique:subcategories'
        ]);

        $subcatid = $request->subcatid;

        Subcategory::findOrFail($subcatid)->update([
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace('','-', $request->subcategory_name)),
        ]); 
        return redirect()->route('allsubcategory')->with('message','Sub Category updated Succesfully!');
    }

    public function DeleteSubCategory($id){
        $cat_id = Subcategory::where('id', $id)->value('category_id');
        Subcategory::findOrFail($id)->delete();
        Category::where('id', $cat_id)->decrement('subcategory_count', 1);

        return redirect()->route('allsubcategory')->with('message', 'Sub Category delete Succesfully!');
    }
}