<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Project_type_setupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_type_setup = DB::table("project_type_setup")->get();
        return view('project_type_setup.index',compact('project_type_setup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_type_setup.create');
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
            'proj_type'=>'required',
            'proj_type_desc'=>'required'
        ]);

        DB::table('project_type_setup')->insert(
            [
                'proj_type'=>$request->proj_type,
                'proj_type_desc'=>$request->proj_type_desc

            ]
            );

            return redirect('project_type_setup');
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
        $project_type_setup = DB::table('project_type_setup')->where('proj_type','=',$id)->get();
        return view('project_type_setup.edit',compact('project_type_setup'));
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
            'proj_type'=>'required',
            'proj_type_desc'=>'required'
        ]);

        DB::table('project_type_setup')->where('proj_type','=',$id)->update(
            [
                'proj_type'=>$request->proj_type,
                'proj_type_desc'=>$request->proj_type_desc
                
            ]
            );

            return redirect('project_type_setup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('project_type_setup')->where('proj_type','=',$id)->delete();

        return redirect('project_type_setup');
    }
}
