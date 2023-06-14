<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.indexdashboard',[
            'product'=>Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.produtcs.create',[

            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->hasfile('image'))
        {
            $file = $request -> file('image');
            $dest = 'uploads/img_products'.'/';
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($dest, $filename);
            // $file -> move('uploads/img_products/'.$filename);
    
      
       // return $request->all();
         $validatedDate= ([
              'category_id'=>request('category_id'),
             'name'=>request('name'),
             'price'=>request('price'),
            'image'=> $filename,
             'description'=>request('description')
          ]);
  Product::create($validatedDate);

          }   
   
     $request->session()->flash('success','Create Product Successfull!');
     return redirect('/dashboard/products/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return  view('dashboard.produtcs.edit',[
            'product'=>$product,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validatedDate;
        if($request->hasfile('image'))
        {   
            
            $file = $request -> file('image');
            $dest = 'uploads/img_products'.'/';
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($dest, $filename);
            // $file -> move('uploads/img_products/'.$filename);

            $validatedDate= ([
                'category_id'=>request('category_id'),
                'name'=>request('name'),
                'price'=>request('price'),
                'image'=>$filename,
                'description'=>request('description')
             ]);
    
        }
        else{
            $validatedDate= ([
                'category_id'=>request('category_id'),
                'name'=>request('name'),
                'price'=>request('price'),
                'description'=>request('description')
             ]);

        }
        
        
        Product::where('id',$product->id)
                ->update($validatedDate);
        
        
        
        $request->session()->flash('success','Update Product Successfull!');
        //return redirect('/dashboard/products');
        return redirect('/dashboard/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Product::destroy($product->id);
    
        return redirect('/dashboard/products');
    }
}
