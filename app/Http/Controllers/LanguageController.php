<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $language = Language::all();
        return view('admin.language.index',compact('language'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.language.create');

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
            'language_name'=>'required',
            'language_level'=>'required',
            ]);
     
    
     $language = Language::create([
            'language_name'=>$request->language_name,
            'language_level'=>$request->language_level,
     ]);
     return redirect()->route('admin.language.index')->with('msg','language data added successfully')->with('type','success');

   
    
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
        $language = Language::findOrFail($id);
        return view('admin.language.edit',compact('language'));
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
            'language_name'=>'required',
            'language_level'=>'required',
            ]);

    $language = Language::find($id);
    
 $language->update([
    'language_name'=>$request->language_name,
    'language_level'=>$request->language_level,
 ]);
 return redirect()->route('admin.language.index')->with('msg','language data Updated successfully')->with('type','success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Language::destroy($id);
        return redirect()->route('admin.language.index')->with('msg','language deleted successfully')->with('type','danger');

    }
}
