<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session, Input;

class LanguageController extends Controller
{
    public function index ($locale) {
    	if(!Session::has('locale')) { 
    	  Session::put('locale', $request->locale); 
    	}else{ 
    	  Session::set('locale', $request->locale); 
    	} 
    	// return redirect()->back();
    }

    public function change(Request $request) {
    	if($request->ajax()) {
    		// $request->session()->put('locale', $request->locale);
    		Session::put('locale', $request->locale);
    	}
    	// return redirect()->back();
    }
}
