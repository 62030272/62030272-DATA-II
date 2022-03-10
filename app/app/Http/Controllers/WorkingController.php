<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WorkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $working = DB::table("working")
                        ->join('project','working.proj_id','=','project.proj_id')
                        ->join('employee','working.emp_id','=','employee.emp_id')
                        ->orderby('working.date_work','desc')
                        ->get();
        return view('working.index',compact('working'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = DB::table('employee')->get();
        $project = DB::table('project')->get();

        return view('working.create',compact('employee','project'));
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
            'date_work'=>'required',
            'proj_id'=>'required',
            'emp_id'=>'required',
            'work_hours'=>'required'
        ]);

        DB::beginTransaction();
        try {
            DB::table('working')->insert(
            [
                'date_work'=>$request->date_work,
                'proj_id'=>$request->proj_id,
                'emp_id'=>$request->emp_id,
                'work_hours'=>$request->work_hours

            ]
            );

            DB::select('call CalculateWorkingRate(?,?,?)',
                        [$request->proj_id,$request->emp_id,$request->work_hours]);
            } catch (ValidationException $e) {
                DB::rollback();
            }

            DB::commit();

            return redirect('working');
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
    public function edit($proj_id , $emp_id)
    {
        $working = DB::table('working')->where('proj_id','=',$proj_id)
                                       ->where('emp_id','=',$emp_id)
                                       ->get();

        return view('working.edit',compact('working'));
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
            'date_work'=>'required',
            'proj_id'=>'required',
            'emp_id'=>'required',
            'work_hours'=>'required'
        ]);

        DB::table('working')->where('emp_id','=',$id)
                            ->where('proj_id','=',$request->proj_id)
                            ->update(
            [
                'date_work'=>$request->date_work,
                'proj_id'=>$request->proj_id,
                'emp_id'=>$request->emp_id,
                'work_hours'=>$request->work_hours

            ]
            );

            return redirect('working');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($proj_id , $emp_id)
    {
        DB::table('working')->where('proj_id','=',$proj_id)
                            ->where('emp_id','=',$emp_id)
                            ->delete();

        return redirect('working');
    }
}
