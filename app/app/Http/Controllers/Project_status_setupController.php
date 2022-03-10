<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Project_status_setupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_status_setup = DB::table("project_status_setup")->get();
        return view('project_status_setup.index',compact('project_status_setup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_status_setup.create');
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
            'proj_status'=>'required',
            'proj_status_desc'=>'required'
        ]);

        DB::table('project_status_setup')->insert(
            [
                'proj_status'=>$request->proj_status,
                'proj_status_desc'=>$request->proj_status_desc

            ]
            );

            return redirect('project_status_setup');
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
        $project_status_setup = DB::table('project_status_setup')->where('proj_status','=',$id)->get();
        return view('project_status_setup.edit',compact('project_status_setup'));
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
            'proj_status'=>'required',
            'proj_status_desc'=>'required'
        ]);

        DB::table('project_status_setup')->where('proj_status','=',$id)->update(
            [
                'proj_status'=>$request->proj_status,
                'proj_status_desc'=>$request->proj_status_desc
                
            ]
            );

            return redirect('project_status_setup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('project_status_setup')->where('proj_status','=',$id)->delete();

        return redirect('project_status_setup');
    }
}
