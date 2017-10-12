<?php

namespace Modules\Language\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// model
use Modules\Language\Entities\Language;

class LanguageController extends Controller
{

    public function index()
    {
        $languages = Language::all();
        return view('language::list', compact('languages'));
    }

}