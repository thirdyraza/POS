<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
       $product=DB::table('product')->get();

        return view('product.index',['product'=>$product]);
    }

    public function create(){
        
        return view('product.create');
    }
    public function Store(Request $request){
        $data=array();
        $data['product_name'] = $request ->product_name;
        $data['product_code'] = $request ->product_code;
        $data['details'] = $request ->details;

        $product=DB::table('product')->insert($data);
        return redirect()->route('product.index')
                         ->with ('success', 'Product Created!');             
    }

    public function Edit($id){
        $product=DB::table('product')->where('id',$id)->first();
        return view('product.edit',compact('product'));
    }

    public function Delete($id){
        $data= DB::table('product')->where('id',$id)->first();
        $product = DB::table('product')->where('id',$id)->delete();
        return redirect()->route('product.index')
                                ->with('success','Product has been Deleted');
    }

    public function Update(Request $request,$id){
        $data=array();
        $data['product_name'] = $request ->product_name;
        $data['product_code'] = $request ->product_code;
        $data['details'] = $request ->details;

        $product=DB::table('product')->where('id',$id)->update($data);
        return redirect()->route('product.index')
                         ->with ('success', 'Product Updated Successfully!');  

    }

    public function Show($id){
        $data = DB::table('product')->where('id',$id)->first();
        return view('product.show',compact('data'));
    }

}
