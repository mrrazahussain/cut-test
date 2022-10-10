<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Pricerange;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function category(){
        $categorydata = Category::all();
        return view('category',compact('categorydata'));
    }
    public function addcategory(Request $request){
        $validated = $request->validate([
            'category_name' => 'required',
            'category_icon' => 'required',
            'order_number' => 'required',
        ]);
        $cat = Category::where('order_number',$request->order_number)->first();
        if($cat) {
            $category = Category::where('order_number',$request->order_number)->first();
            if( $request->file('category_icon') ) {
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
        } else {
            $category = new Category;
            if( $request->file('category_icon') ) {
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
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_cat_icon' => 'required',
            'sub_cat_name' => 'required',
            'order_number' => 'required',
        ]);
        $subcategory = Subcategory::where('order_number',$request->order_number)->first();

        if($subcategory){
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
        $validated = $request->validate([
            'brand_name' => 'required',
            'brand_icon' => 'required',
            'order_number' => 'required',
        ]);
        $brands = Brand:: where('order_number',$request->order_number)->first();

        if($brands){
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

    public function pricerange(){
        $pricerange = Pricerange::all();
        return view('price-range',compact('pricerange'));
    }

    public function employees(){
        $employees = User::where('role','!=',1)->where('role','!=',2)->get();
        return view('employees',compact('employees'));
    }

    public function categorytrack(){
        return view('category-tracking');
    }

    public function addrange(Request $request){
        $validated = $request->validate([
            'price_range_name' => 'required',
            'order_number' => 'required',
            'range_minimum' => 'required',
            'range_maximum' => 'required',

        ]);
        $price = Pricerange::where('order_number',$request->order_number)->first();
        if($price){
       $pricerange = Pricerange::where('order_number',$request->order_number)->first();
       $pricerange->price_range_name = $request->price_range_name;
       $pricerange->order_number = $request->order_number;
       $pricerange->range_minimum = $request->range_minimum;
       $pricerange->range_maximum = $request->range_maximum;
       $pricerange->status = $request->status;
       $pricerange->update();
       return redirect()->back();
        }
       $pricerange = new Pricerange;
       $pricerange->price_range_name = $request->price_range_name;
       $pricerange->order_number = $request->order_number;
       $pricerange->range_minimum = $request->range_minimum;
       $pricerange->range_maximum = $request->range_maximum;
       $pricerange->status = $request->status;
       $pricerange->save();
       return redirect()->back();


    }

    public function getrange($id){
        $range = Pricerange::find($id);
        return response()->json([
            'status' => 200,
            'range' => $range,
        ]);

    }

    public function pricerangearch($id){
        $pricerange = Pricerange::find($id);
        $pricerange->status = 0;
        $pricerange->update();
        return redirect()->back();
    }

    public function unpricerangearch($id){
        $pricerange = Pricerange::find($id);
        $pricerange->status = 1;
        $pricerange->update();
        return redirect()->back();
    }

    public function allusers(){
       $roles = Role::all();
       return view('users',compact('roles'));
    }

    public function usersdata(){
        //  $users = User::where('role', '!=', 0)->get();
         $users = User::where('status',0)->get();
        // $users = User::with('role')->get();
        return response()->json([
            'status' => 200,
            'users' => $users ,
        ]);
    }

    public function displayusers($id){
       $v_id = (int)$id;
         $users = User::where('role',$v_id)->get();
        //  dd($users);
         return response()->json([
            'status' => 200,
            'users' => $users ,
        ]);
    }

    public function userdisplay($id){
        $v_id = (int)$id;
        $users = User::where('status',$v_id)->get();
        return response()->json([
            'status' => 200,
            'users' => $users ,
        ]);
    }

    public function employeearch($id){
        $user = User::find($id);
        $user->status = 0;
        $user->update();
        return redirect()->back();

    }

    public function unemployeearch($id){
        $user = User::find($id);
        $user->status = 1;
        $user->update();
        return redirect()->back();
    }

    public function fetchemployees($id){
       $user = User::find($id);
       return response()->json([
         'status'=> 200,
         'users'=> $user,
       ]);
    }

    public function addstaff(Request $request){
        $user = new User;
        $user->lname = $request->lname;
        $user->fname = $request->fname;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
           'status' => 200,
        ]);
    }





}
