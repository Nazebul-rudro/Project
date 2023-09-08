<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product, Request $request)
    {
        if ($request->hasFile('images')) {
            $files = $request->file('images'); // Use file() instead of hasFile()
            $imageLocation = array();
            $i = 0;
            foreach ($files as $file) {
                $exe = $file->getClientOriginalExtension();
                $img_name = uniqid().time(). ++$i. '.'.$exe;
            }
        }
        
       $result = $product->create([
            'name' => $request->product_name,
            'amount' => $request->amount,
            'price' => $request->price,
            'images' => $img_name,
            'is_active' => $request->is_active == true ? 1 : 0
            
        ]);
        dd($result->all());
        //
        // return "HEllo";
        // dd($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
