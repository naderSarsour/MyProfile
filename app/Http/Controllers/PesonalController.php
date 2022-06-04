<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal_Data;

class PesonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal_Data::all();
     return view('admin.personal.index',compact('personal'));
       // return 'aaaaa';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personal.create');

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
            'name'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'email'=>'required|max:500',
            'image'=>'required |image',
            ]);
     //upload the file
     $image= time() . rand() . $request->file('image')->getClientOriginalName();

    
     $personal = Personal_Data::create([
            'name'=>$request->name,
            'sex'=>$request->sex,
            'age'=>$request->age,
            'address'=>$request->address,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'image'=>$image,
            
     ]);
     if($personal){
        $request->file('image')->move(public_path('uploads'),$image);

     }
     return redirect()->route('admin.personal.index')->with('msg','personals data added successfully')->with('type','success');
     
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
        $personal = Personal_Data::findOrFail($id);
        return view('admin.personal.edit',compact('personal'));
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
            'name'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'address'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            ]);

        $personal = Personal_Data::find($id);
        $image= $personal->image;
        if($request->hasFile('image')){
            $imagename= 'personal'.time() . rand() . $request->file('image')->getClientOriginalName();

        }
        
     $personal->update([
        'name'=>$request->name,
        'sex'=>$request->sex,
        'age'=>$request->age,
        'address'=>$request->address,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'image'=>$image,
            
            
     ]);
     if($request->hasFile('image')){
        $request->file('image')->move(public_path('uploads'),$imagename);
    }
     return redirect()->route('admin.personal.index')->with('msg','personal data Updated successfully')->with('type','success');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Personal_Data::destroy($id);
        return redirect()->route('admin.personal.index')->with('msg','personal deleted successfully')->with('type','danger');

    }
}
