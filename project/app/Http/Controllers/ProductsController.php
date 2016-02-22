<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
//use Requests\ProductsRequest;
class ProductsController extends Controller
{
    public function index(){
    	return view('products.products');
    }
    public function show($id){
    	$product = Products::whereProducttype($id)->get();
    	return view('products.show',compact('product'));
    }
    public function buy($id1,$id2){
    	$product = Products::whereProducttypeAndId($id1,$id2)->get();
    	return view('products.buy',compact('product'));
    }
    public function edit($id){
     	$product = Products::findOrFail($id);
    	return view('products.editOrDelete',compact('product'));
    }
     public function create(){
         return view('products.create');
    }
    public function store(Requests\ProductsRequest $request){

        Products::create($request->all());
        return redirect('products/'.$request->producttype);
    }
    public function update($id,Requests\ProductsRequest $request){
        $product = Products::findOrFail($id);
        $product->update($request->all());
        return redirect('products/'.$product->producttype);
    }
    public function delete($id){
        $product = Products::findOrFail($id);
        Products::destroy($id);
        return redirect('products/'.$product->producttype);
    }
   
   /* public function store(Requests\ProductsRequest $request){
         $input = $request->all();
         
         Article::create($input);
         return redirect('products/'.$input->producttype);
     
     }*/
}

