<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('clients.create');
    }
    public function client_display(){
        $clients = Client::all();
       return view('clients.create',compact('clients'));
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
        $clients = Client::where('email',$request->email)->first();
        if(empty($clients)){
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/clients/',$document_name);
            Client::create([
                'title'=>$request->title,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'alternative_email'=>$request->alternative_email,
                'phone_number'=>$request->phone_number,
                'alternative_phone_number'=>$request->alternative_phone_number,
                'gender'=>$request->gender,
                'present_address'=>$request->present_address,
                'permanent_address'=>$request->permanent_address,
                'image'=>$request->image,
                'dob'=>$request->dob,
                'age'=>$request->age,
                'nid'=>$request->nid,
                'nationality'=>$request->nationality,
            ]);
            Session::flash('success', 'Client profile Created succesfully');
            return redirect()->route('client.index');
        }
        else{
            Session::flash('error', 'Client Exists');
            return redirect()->route('client.index');
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
}
