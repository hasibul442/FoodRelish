<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.create');
    }

    public function vendorlist()
    {
        $vendors = Vendor::all();
        return view('vendor.show', compact('vendors'));
    }

    public function vendorproducts()
    {
        $vproducts = Stock::all();
        return view('vendor.vplist', compact('vproducts'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $vendor = Vendor::where('vid', $request->vid)->first();
        if(empty($vendor)){
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/vendors/',$document_name);
            Vendor::create([
                'name'=>$request->name,
                'vid'=>$request->vid,
                'image'=>$document_name,
                'address'=>$request->address,
                'email'=>$request->email,
                'spname'=>$request->spname,
                'phone'=>$request->phone,
            ]);
//            Session::flash('success', 'Vendor profile Created succesfully');
            return redirect()->route('vendor.create');
        }
        else{
//            Session::flash('error', 'Vendor Exists !!!');
            return redirect()->back();
        }
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

    public function type($type){
        if ($type == "Vendor"){
            $vname = Vendor::all();
            return response()->json($vname);
        }
    }
}
