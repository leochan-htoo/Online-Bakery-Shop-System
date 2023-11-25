<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller

{
    // this code function is for view product catagory for admin catagory
    public function view_catagory()
    {
        $data=catagory::all();
        return view('admin.catagory', compact('data'));
    }
    // this code function is for add product catagory for admin catagory
    public function add_catagory(Request $request)
    {
        $data=new catagory;

        $data->catagory_name=$request->catagory;

        $data->save();
        return redirect()->back()->with('message','Catagory Added Successfully');
    }
    // this code function is for delete action for admin catagory
    public function delete_catagory($id)
    {
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Catagory Deleted Successfully');
    }

    // this code function logic is for view product
    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product',compact('catagory'));
    }

    // this code function is for add product catagory in admin part
    public function add_product(Request $request)
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->catagory=$request->catagory;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);

        $product->image=$image;


        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }
}
