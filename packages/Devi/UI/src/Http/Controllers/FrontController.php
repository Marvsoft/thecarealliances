<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Devi\UI\DataGrid\Exports\DataGridExport;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

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
