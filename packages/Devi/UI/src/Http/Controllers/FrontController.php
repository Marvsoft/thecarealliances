<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Devi\UI\DataGrid\Exports\DataGridExport;

class FrontController extends Controller
{
    /**
     * Export datagrid.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ui::front.index');
    }
}
