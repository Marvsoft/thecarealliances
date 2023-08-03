<?php

namespace Devi\Admin\Http\Controllers\Setting;

use Devi\Admin\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin::settings.index');
    }
}