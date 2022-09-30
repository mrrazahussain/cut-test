<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;

class AdminController extends Controller
{
    public function category(){
        $categorydata = Category::all();
        return view('category',compact('categorydata'));
    }
    public function addcategory(Request $request){
        $cat = Category:: where('order_number',$request->order_number)->first();
        $validated = $request->validate([
            'category_name' => 'required',
            'category_icon' => 'required',
            'order_number' => 'required',
        ]);
        if($request->order_number == $cat->order_number){
            $category = Category::where('order_number',$request->order_number)->first();
            if($request->file('category_icon')){
                $file= $request->file('category_icon');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('images/categories'), $filename);
                $category['category_icon'] = $filename;
            }
               $category->category_name = $request->category_name;
               $category->order_number = $request->order_number;
               $category->status = $request->status;
               $category->update();
               return redirect()->back();
        }
        else{
       $category = new Category;
       if($request->file('category_icon')){
        $file= $request->file('category_icon');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('images/categories'), $filename);
        $category['category_icon'] = $filename;
    }
       $category->category_name = $request->category_name;
       $category->order_number = $request->order_number;
       $category->status = $request->status;
       $category->save();
       return redirect()->back();
    }
}
    public function subcategory(){
        $category = Category::all();
        $subcategory = Subcategory::with('category')->get();
        return view('subcategory',compact('category','subcategory'));
    }

    public function addsubcategory(Request $request){
        $subcat = Category:: where('order_number',$request->order_number)->first();
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_cat_icon' => 'required',
            'sub_cat_name' => 'required',
            'order_number' => 'required',
        ]);
        if($request->order_number == $subcat->order_number){
            $subcategory = Subcategory::where('order_number',$request->order_number)->first();
            if($request->file('sub_cat_icon')){
                $file= $request->file('sub_cat_icon');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('images/subcategories'), $filename);
                $subcategory['sub_cat_icon'] = $filename;
            }
            $subcategory->category_id = $request->category_id;
            $subcategory->sub_cat_name = $request->sub_cat_name;
            $subcategory->order_number = $request->order_number;
            $subcategory->status = $request->status;
            $subcategory->update();
            return redirect()->back();

        }
        else{
        $subcategory = new Subcategory;
        if($request->file('sub_cat_icon')){
            $file= $request->file('sub_cat_icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/subcategories'), $filename);
            $subcategory['sub_cat_icon'] = $filename;
        }
        $subcategory->category_id = $request->category_id;
        $subcategory->sub_cat_name = $request->sub_cat_name;
        $subcategory->order_number = $request->order_number;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect()->back();

    }
    }

    public function brands(){

        $brands = Brand::all();
        return view('brands',compact('brands'));
    }
    public function addbrands(Request $request){
        $brands = Brand:: where('order_number',$request->order_number)->first();
        $validated = $request->validate([
            'brand_name' => 'required',
            'brand_icon' => 'required',
            'order_number' => 'required',
        ]);
        if($request->order_number == $brands->order_number){
            $brand = Brand::where('order_number',$request->order_number)->first();
            if($request->file('brand_icon')){
                $file= $request->file('brand_icon');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('images/brands'), $filename);
                $brand['brand_icon'] = $filename;
            }
            $brand->brand_name = $request->brand_name;
            $brand->order_number = $request->order_number;
            $brand->status = $request->status;
            $brand->update();
            return redirect()->back();
        }
        else{
        $brand = new Brand();
        if($request->file('brand_icon')){
            $file= $request->file('brand_icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/brands'), $filename);
            $brand['brand_icon'] = $filename;
        }
        $brand->brand_name = $request->brand_name;
        $brand->order_number = $request->order_number;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->back();
        }
    }

    public function catarch($id){
        $cat = Category::find($id);
        $cat->status = 0;
        $cat->update();
        return redirect()->back();

    }

    public function uncatarch($id){
        $cat = Category::find($id);
        $cat->status = 1;
        $cat->update();
        return redirect()->back();

    }

    public function subcatarch($id){
        $subcat = Subcategory::find($id);
        $subcat->status = 0;
        $subcat->update();
        return redirect()->back();

    }

    public function unsubcatarch($id){
        $subcat = Subcategory::find($id);
        $subcat->status = 1;
        $subcat->update();
        return redirect()->back();

    }

    public function brandarch($id){
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->update();
        return redirect()->back();

    }

    public function unbrandarch($id){
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->update();
        return redirect()->back();

    }

    public function catdata($id){
        $category = Category::find($id);
        return response()->json([
            'status'=>200,
            'category'=> $category,
        ]);
    }

    public function subcatdata($id){
        $subcat = Subcategory::find($id);
        return response()->json([
            'status'=>200,
            'subcat'=> $subcat,
        ]);

    }

    public function branddata($id){
        $brand = Brand::find($id);
        return response()->json([
            'status'=>200,
            'brand' => $brand,
        ]);
    }


}
