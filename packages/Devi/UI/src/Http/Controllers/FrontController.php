<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class FrontController extends Controller
{
    /**
     * Export datagrid.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchData() {
        $category = DB::table('charch_category')->get();
        $zipcode = DB::table('charch_address')->distinct()->pluck('zip_code');

        return [$category, $zipcode];
    }

    public function index()
    {
        $category = $this->searchData()[0];
        $zipcode = $this->searchData()[1];
        return view('ui::layouts.index', compact('category', 'zipcode'));
    }

    public function create_plan()
    {
        return view('ui::front.create-your-plan');
    }


    public function i_can_help()
    {
        return view('ui::front.i-can-help');
    }

    public function who_am_i()
    {
        $category = $this->searchData()[0];
        $zipcode = $this->searchData()[1];
        return view('ui::front.who-am-i', compact('category', 'zipcode'));
        // return view('ui::front.who-am-i');
    }

    public function i_need_help()
    {
        return view('ui::front.i-need-help');
    }

    public function mentoring_portal()
    {
        return view('ui::front.mentoring-portal');
    }
    public function share_experiences()
    {
        return view('ui::front.share-experiences');
    }

    public function create_new_community()
    {
        return view('ui::front.create-new-community');
    }
}
