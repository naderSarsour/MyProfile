<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practical_experiance;

class ExperianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiance = Practical_experiance::all();
        return view('admin.experiance.index',compact('experiance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiance.create');

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
            'job_title'=>'required',
            'place'=>'required',
            'years_of_experiance'=>'required',
            ]);
     
    
     $experiance = Practical_experiance::create([
            'job_title'=>$request->job_title,
            'place'=>$request->place,
            'years_of_experiance'=>$request->years_of_experiance,
     ]);
     return redirect()->route('admin.experiance.index')->with('msg','experiances data added successfully')->with('type','success');

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
        $experiance = Practical_experiance::findOrFail($id);
        return view('admin.experiance.edit',compact('experiance'));
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
            'job_title'=>'required',
            'place'=>'required',
            'years_of_experiance'=>'required',
            ]);

        $experiance = Practical_experiance::find($id);
        
     $experiance->update([
        'job_title'=>$request->job_title,
        'place'=>$request->place,
        'years_of_experiance'=>$request->years_of_experiance,
     ]);
     return redirect()->route('admin.experiance.index')->with('msg','experiance data Updated successfully')->with('type','success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Practical_experiance::destroy($id);
        return redirect()->route('admin.experiance.index')->with('msg','experiance deleted successfully')->with('type','danger');

    }
}
