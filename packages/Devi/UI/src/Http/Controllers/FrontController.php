<?php

namespace Devi\UI\Http\Controllers;

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
        $category = DB::table('charch_address')->get();
        return view('ui::front.index', compact('category'));
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
        return view('ui::front.who-am-i');
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