<?php

namespace Devi\Admin\Http\Controllers\Who_Am_I;

use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\DataGrids\WhoAmIDataGrid;

class WhoAmIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(WhoAmIDataGrid::class)->toJson();
        }

        return view('admin::who_am_i.index');
    }

    /**
     * Display a Craete page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin::who_am_i.create');
    }
}
