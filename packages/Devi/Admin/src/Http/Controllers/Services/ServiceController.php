<?php

namespace Devi\Admin\Http\Controllers\Services;

use Devi\Admin\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin::services.index');
    }
}
