<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = DB::table("project")->get();
        return view('project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'proj_id'=>'required',
            'proj_name'=>'required',
            'proj_type'=>'required',
            'location'=>'required',
            'budget'=>'required',
            'proj_status'=>'required'
        ]);

        DB::table('project')->insert(
            [
                'proj_id'=>$request->proj_id,
                'proj_name'=>$request->proj_name,
                'proj_type'=>$request->proj_type,
                'location'=>$request->location,
                'budget'=>$request->budget,
                'proj_status'=>$request->proj_status

            ]
            );

            return redirect('project');
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
        $project = DB::table('project')->where('proj_id','=',$id)->get();
        return view('project.edit',compact('project'));
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
            'proj_id'=>'required',
            'proj_name'=>'required',
            'proj_type'=>'required',
            'location'=>'required',
            'budget'=>'required',
            'proj_status'=>'required'
        ]);

        DB::table('project')->where('proj_id','=',$id)->update(
            [
                'proj_id'=>$request->proj_id,
                'proj_name'=>$request->proj_name,
                'proj_type'=>$request->proj_type,
                'location'=>$request->location,
                'budget'=>$request->budget,
                'proj_status'=>$request->proj_status

            ]
            );

            return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('project')->where('proj_id','=',$id)->delete();

        return redirect('project');
    }
}
