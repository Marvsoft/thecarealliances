<?php

namespace Devi\Admin\Http\Controllers\Customers;

use Devi\Admin\Http\Controllers\Controller;
use Devi\Admin\DataGrids\CustomerDataGrid;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CustomerDataGrid::class)->toJson();
        }

        return view('admin::customers.index');
    }
}
