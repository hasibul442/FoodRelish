<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees.create');
    }

    public function employee_display(){
        $employees = Employee::all();
        return view('employees.show',compact('employees'));
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
        $employee = Employee::where('email', $request->email)->first();
        if(empty($employee)){
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/images/employees/',$document_name);
            $cv = $request->file('cv');
            $cv_name = rand().'.'.$cv->getClientOriginalExtension();
            $cv->move(public_path().'/assets/images/employees/cv/',$cv_name);
            Employee::create([
                'name'=>$request->name,
                'age'=>$request->age,
                'image'=>$document_name,
                'address'=>$request->address,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'cv'=>$cv_name,
                'salary'=>$request->salary,
                'joining_date'=>$request->joining_date,
                'contract'=>$request->contract,
            ]);
            Session::flash('success', 'Employee profile Created succesfully');
            return redirect()->route('employee.index');
        }
        else{
            Session::flash('error', 'Employee Exists !!!');
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
        return view('employees.profile');
    }
    public function profile($id)
    {
        $employee = Employee::find($id);
        return view('employees.profile',compact('employee'));
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
