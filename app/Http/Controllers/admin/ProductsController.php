<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Storage;
use DB;
class productsController extends Controller
{
    public function index()
    {
        $products=DB::table('products')->get();
        return view('admin.product.index',compact('products'));
    }
    public function show($id)
    {
        $product=Product::where('id',$id)->first();
        return view('admin.product.show',compact('product'));
    }
    public function create(Product $product)
    {
        return view('admin.product.create',compact('product'));
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $products=DB::table('products')->where('name','like','%'.$search.'%')->get();
        return view('admin.product.resultsearch',compact('products'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $products=new Product();
        $products->name=$request->name;
        $products->count=$request->count;
        $products->save();
        return redirect()->route('admin.product.index');
    }
    public  function edit(Product $product)
    {
        return view('admin.product.edit',compact('product'));
    }
    public function update(Request $request ,Product $product)
    {

        // $product=new Product();
        $product->name=$request->name;
        $product->count=$request->count;
        $product->save();

        return redirect()->route('admin.product.index');

    }
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
