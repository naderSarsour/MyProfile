<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class qualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qualification = Qualification::all();
     return view('admin.qualification.index',compact('qualification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.qualification.create');

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
            'qualification_name'=>'required',
            'university'=>'required',
            'year'=>'required',
            'grade'=>'required',
            ]);
     
    
     $qualification = Qualification::create([
            'qualification_name'=>$request->qualification_name,
            'university'=>$request->university,
            'year'=>$request->year,
            'grade'=>$request->grade,
            
     ]);
     return redirect()->route('admin.qualification.index')->with('msg','qualifications data added successfully')->with('type','success');
     
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
        $qualification = Qualification::findOrFail($id);
        return view('admin.qualification.edit',compact('qualification'));
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
            'qualification_name'=>'required',
            'university'=>'required',
            'year'=>'required',
            'grade'=>'required',
            ]);

        $qualification = Qualification::find($id);
        
     $qualification->update([
        'qualification_name'=>$request->qualification_name,
        'university'=>$request->university,
        'year'=>$request->year,
        'grade'=>$request->grade,
     ]);
     return redirect()->route('admin.qualification.index')->with('msg','qualification data Updated successfully')->with('type','success');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Qualification::destroy($id);
        return redirect()->route('admin.qualification.index')->with('msg','qualification deleted successfully')->with('type','danger');

    }
}
