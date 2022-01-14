<?php

namespace App\Http\Controllers\admin;

use App\Sales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
class salessController extends Controller
{
    public function index()
    {
        $saless=DB::table('sales')->get();
        return view('admin.sales.index',compact('saless'));
    }
    
    public function create(Sales $sales)
    {
        $products=Product::all();
        return view('admin.sales.create',compact('products','sales'));
    }
    public function search(Request $request)
    {
        $search=$request->get('search');
        $saless=DB::table('sales')->where('count','like','%'.$search.'%')->get();
        return view('admin.sales.resultsearch.blade.php',compact('saless'));
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'count' => 'required|min:1',      // validation
        ]);
        //dd($request->all());
        $product = Product::findOrFail($request->product_id);
        if($product->count >= $request->count){     // product count must be greater than or equal sales count
            $product->count -= $request->count;  // new product count = old product count - sales count after sales some products
            $product->save();
            $saless=new Sales();
            $saless->product_id=$request->product_id;
            $saless->count=$request->count;
            $saless->save();
        }else{
            return redirect()->route('admin.sales.create')->with('error','Sales Count Must Be Bigger Than Product Count');} // error message if sales count is greater than product count
        return redirect()->route('admin.sales.index');
    }
   
    public function delete(Sales $sales)
    {
        $sales->delete();
        return redirect()->route('admin.sales.index');
    }
}
