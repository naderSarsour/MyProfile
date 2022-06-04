<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');

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
            'skills_name'=>'required',
            'skills_grade'=>'required',
            ]);
     
    
     $skills = Skill::create([
            'skills_name'=>$request->skills_name,
            'skills_grade'=>$request->skills_grade,
     ]);
     return redirect()->route('admin.skills.index')->with('msg','skills data added successfully')->with('type','success');

   
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
        $skills = Skill::findOrFail($id);
        return view('admin.skills.edit',compact('skills'));
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
                'skills_name'=>'required',
                'skills_grade'=>'required',
                ]);

        $skills = Skill::find($id);
        
     $skills->update([
        'skills_name'=>$request->skills_name,
        'skills_grade'=>$request->skills_grade,
     ]);
     return redirect()->route('admin.skills.index')->with('msg','skills data Updated successfully')->with('type','success');
   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::destroy($id);
        return redirect()->route('admin.skills.index')->with('msg','skills deleted successfully')->with('type','danger');

    }
}
