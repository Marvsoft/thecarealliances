<?php

namespace Devi\Admin\Http\Controllers\Resources;

use Devi\Admin\Http\Controllers\Controller;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(PostDataGrid::class)->toJson();
        }

        return view('admin::resources.index');
    }
}
