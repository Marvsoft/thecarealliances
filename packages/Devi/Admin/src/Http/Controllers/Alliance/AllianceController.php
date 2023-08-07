<?php

namespace Devi\Admin\Http\Controllers\Alliance;

use Devi\Admin\Http\Controllers\Controller;
// use Devi\Post\Repositories\WhoamiRepo    sitory;

class AllianceController extends Controller
{
    public function __construct(
        // protected WhoamiRepository $whoamiRepository
    )
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin::alliance.index');
    }

    /**
     * Display a Craete page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin::alliance.create');
    }
}
