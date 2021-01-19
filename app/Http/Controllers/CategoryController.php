<?php

namespace App\Http\Controllers;

use App\Category;
use App\Childcategory;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $childcategories = Childcategory::all();
        return view('products.category', compact('categories','subcategories', 'childcategories'));
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
        for($i=0;$i<count($request->name);$i++){
            Category::create([
                'name'=>$request->name[$i],
            ]);
        }
        return redirect()->back();
    }
    public function substore(Request $request){
        for($i=0;$i<count($request->name);$i++){
            $subcategory = Subcategory::where('category', $request->category)->where('name', $request->name[$i])->first();
            if(empty($subcategory)){
                Subcategory::create([
                    'category'=>$request->category,
                    'name'=>$request->name[$i],
                ]);
            }
            else{
                Session::flash('error', 'Sub-Cateogry '.$request->name[$i].' is already existed in ' .$request->category.' Category');
                return redirect()->back();
            }
        }
        Session::flash('success', 'Sub-Cateogry added successfully');
        return redirect()->back();
    }
    public function childstore(Request $request){

        for($i=0;$i<count($request->name);$i++){
            $childcategory = Childcategory::where('category', $request->category)->where('subcategory', $request->subcategory)->where('name', $request->name[$i])->first();
            if(empty($childcategory)){
                Childcategory::create([
                    'category'=>$request->category,
                    'subcategory'=>$request->subcategory,
                    'name'=>$request->name[$i],
                    'batch_id'=>$request->batch_id[$i],
                ]);
            }
            else{
                Session::flash('error', 'Child-Cateogry '.$request->name[$i].'Sub-Cateogry '.$request->subcategory.' is already existed in ' .$request->category.' Category');
                return redirect()->back();
            }
        }
        Session::flash('success', 'Child-Cateogry added successfully');
        return redirect()->back();
//        dd($request->all);

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
        Category::find($id)->delete();
        return redirect()->back();
    }
    public function subdestroy(Request $request){
        $id = $request->id;
        Subcategory::find($id)->delete();
        return redirect()->back();
    }
    public function childdestroy(Request $request){
        $id = $request->id;
        Childcategory::find($id)->delete();
        return redirect()->back();
    }



    public function category($category){
        $sub_category = Subcategory::where('category', $category)->get();
        return response()->json($sub_category);
    }
    public function sub_category($sub_category, $category){
        $childcategory = Childcategory::where('category', $category)->where('subcategory', $sub_category)->get();
        return response()->json($childcategory);
    }
    public function childcategory($childcategory, $sub_category, $category){
        $bid = Childcategory::where('category', $category)->where('subcategory', $sub_category)->where('name', $childcategory)->first();
        return response()->json($bid);
    }
}
