<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM employee ORDER BY emp_id DESC
        //$employee = EmployeeModel::latest()->get();
        //SELECT * FROM employee
        $employee = DB::table('employee')->get();
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_id'=>'required',
            'emp_name'=>'required',
            'emp_lname'=>'required',
            'job'=>'required'
        ]);

        DB::table('employee')->insert(
            [
                'emp_id'=>$request->emp_id,
                'emp_name'=>$request->emp_name,
                'emp_lname'=>$request->emp_lname,
                'job'=>$request->job,
                'chg_hour'=>$request->chg_hour

            ]
            );

            return redirect('employee');
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
        $employee = DB::table('employee')->where('emp_id','=',$id)->get();
        return view('employee.edit',compact('employee'));
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
        $request->validate([
            'emp_id'=>'required',
            'emp_name'=>'required',
            'emp_lname'=>'required',
            'job'=>'required'
        ]);

        DB::table('employee')->where('emp_id','=',$id)->update(
            [
                'emp_id'=>$request->emp_id,
                'emp_name'=>$request->emp_name,
                'emp_lname'=>$request->emp_lname,
                'job'=>$request->job,
                'chg_hour'=>$request->chg_hour

            ]
            );

            return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('employee')->where('emp_id','=',$id)->delete();

        return redirect('employee');
    }
}
