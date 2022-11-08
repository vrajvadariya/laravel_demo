<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index()
    {
        $url = url('/product');
        $data = compact('url');
        return view('product')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'sku'  => 'required',
                'price' => 'required',
                'short_description' => 'required',
                'description' => 'required',
            ]
        );
        //insert query//
        $productdata = new Product;
        $productdata->name = $request['name'];
        $productdata->sku = $request['sku'];
        $productdata->price = $request['price'];
        $productdata->short_description = $request['short_description'];
        $productdata->description = $request['description'];
        $productdata->image = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/user/', $filename);
            $productdata->image = $filename;
        }
        $productdata->save();
        return redirect('/product/view');
    }

    public function view()
    {
        $productdata = Product::all();
        // echo"<pre>";
        // print_r($productdata);
        // die;

        $data = compact('productdata');
        return view('product-view')->with($data);
    }


    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect('/product/view');
    }

    public function edit($id)
    {
        $productdata = Product::find($id);
        return view('productupdate', compact('productdata'));
    }

    public function update($id, Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'sku'  => 'required',
                'price' => 'required',
                'short_description' => 'required',
                'description' => 'required',
            ]
        );


        $productdata = new Product;
        $productdata->name = $request['name'];
        $productdata->sku = $request['sku'];
        $productdata->price = $request['price'];
        $productdata->short_description = $request['short_description'];
        $productdata->description = $request['description'];
        $productdata->image = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/user/', $filename);
            $productdata->image = $filename;
        }
        $productdata->update();

        $productdata = Product::find($id);
        return view('productupdate', compact('productdata'));
    }


    public function productshow($id)
    {
        $productdata = Product::find($id);
        // echo"<pre>";
        // print_r($productdata);
        // die;
        $data = compact('productdata');
        // echo"<pre>";
        // print_r($data);
        // die;
        return view('show-product')->with($data);
        $data = compact('productdata');
        // echo"<pre>";
        // print_r($data);
        // die;
        // echo"<pre>";
        // print_r($data);
        // die;

    }
}
