<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    $employee = new Employee();
    $employee->name = $request->get('name');
    $employee->save();
 
    return redirect('employees')->with('success','Employee has been added');
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
    $employee = Employee::find($id);
    return view('edit',compact('employee','id'));
   }

   public function update(Request $request, $id)
   {
    $employee= Employee::find($id);
    $employee->name=$request->get('name');
    $employee->save();
    return redirect('employees')->with('success','Employee Has Been Updated Successfully');
   }

   public function destroy($id)
   {
    $employee = Employee::find($id);
    $employee->delete();
    return redirect('employees')->with('success','Employee Has Been Deleted Successfully');
   }
}
