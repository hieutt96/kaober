<?php

namespace Modules\SettingAdmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Session;

// model
use Modules\SettingAdmin\Entities\Setting;
use Modules\SettingAdmin\Entities\Option;

class SettingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('settingadmin::theme');
    }

    public function theme($name) {
        Session::put('themeadmin', $name);
        return redirect()->route('admin::settingadmin::theme');
    }

    public function sidebar($name) {
        Session::put('fixsidebar', $name);
        return redirect()->route('admin::settingadmin::theme');
    }

    public function collapse($name) {
        Session::put('collapsesidebar', $name);
        return redirect()->route('admin::settingadmin::theme');
    }
 
}
