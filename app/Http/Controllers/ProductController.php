<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Stock;
use App\Stockentry;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();
       return view('products.create',compact('categories'));
    }

    public function product_display()
    {
        $products = Product::all();
        return view('products.show',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/products/',$document_name);
        $batchid = $request->bid;
        $quantity = $request->quantity;

 for($i=0;$i<$quantity;$i++) {
     $product = Product::create([
         'category' => $request->category,
         'subcategory' => $request->subcategory,
         'childcategory' => $request->childcategory,
         'bid'=> $batchid,
         'pid' => $batchid.rand(1,1000),
         'type' => $request->type,
         'sourcename' => $request->sourcename,
         'title' => $request->title,
         'description' => $request->description,
         'image' => $document_name,
         'price' => $request->price,
         'quantity' => $request->quantity,

     ]);
      }

        $stock = Stock::where('bid', $batchid)->first();
        if(empty($stock)){
            Stock::create([
                'category'=>$product->category,
                'subcategory'=>$product->subcategory,
                'childcategory'=>$product->childcategory,
                'bid'=>$product->bid,
                'type'=>$product->type,
                'sourcename'=>$product->sourcename,
                'title'=>$product->title,
                'description'=>$product->description,
                'image'=>$product->image,
                'price'=>$product->price,
                'quantity'=>$product->quantity,
            ]);
        }
        else{
            $stock->update([
                'quantity'=>$stock->quantity + $product->quantity,
            ]);
        }

        Stockentry::create([
            'category'=>$product->category,
            'subcategory'=>$product->subcategory,
            'childcategory'=>$product->childcategory,
            'bid'=>$product->bid,
            'type'=>$product->type,
            'sourcename'=>$product->sourcename,
            'title'=>$product->title,
            'description'=>$product->description,
            'image'=>$product->image,
            'price'=>$product->price,
            'quantity'=>$product->quantity,
        ]);

        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
