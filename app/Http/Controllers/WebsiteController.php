<?php

namespace App\Http\Controllers;


use App\Models\Skill;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Personal_Data;
use App\Models\Qualification;
use App\Models\Practical_experiance;
use Illuminate\Support\Facades\Auth;
 
class WebsiteController extends Controller
{
     public function index()
     {
        $experiance = Practical_experiance::all();
        $language = Language::all();
        $personal = Personal_Data::all();
        $qualification = Qualification::all();
        $skills = Skill::all();
        $user = Auth::user();

        return view('index',compact('experiance','language','personal','qualification','skills','user'));
    }
}
