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

    public function index()
    {
        return view('ui::front.index');
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

    public function edutainment_culture_and_lifestyle()
    {
        return view('ui::front.edutainment-culture-and-lifestyle');
    }

    public function login()
    {
        return view('ui::front.login');
    }

    public function sign_up()
    {
        return view('ui::front.sign-up');
    }

    public function partners()
    {
        return view('ui::front.partners');
    }

    public function directory()
    {
        return view('ui::front.directory');
    }

    public function contact_us()
    {
        return view('ui::front.contact-us');
    }

    public function blogs()
    {
        return view('ui::front.blogs');
    }

    public function blog_detail()
    {
        return view('ui::front.blog-detail');
    }

    public function alliances()
    {
        return view('ui::front.alliances');
    }

    public function all_list()
    {
        return view('ui::front.add-list');
    }

    public function about_us()
    {
        return view('ui::front.about-us');
    }

    public function services()
    {
        return view('ui::front.services');
    }

    public function programs()
    {
        return view('ui::front.programs');
    }

    public function users()
    {
        return view('ui::front.user');
    }

    public function password_reset()
    {
        return view('ui::front.password-reset');
    }
}
