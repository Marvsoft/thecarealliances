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

    /*
    * Create plan
    */
    public function create_plan()
    {
        return view('ui::front.create-your-plan');
    }

    public function create_plan_store()
    {
        dd(request()->only([
            'categoryValue', 'title', 'startdate', 'enddate', 'description', 'priority', 'obstacles'
        ]));
    }

    public function i_can_help()
    {
        return view('ui::front.i-can-help');
    }

    public function i_can_help_store()
    {
        dd(request()->only([
            'name', 'email', 'help', 'urgent', 'nonUrgent', 'other', 'categoryValue', 'location', 'country', 'state', 'zip', 'town', 'schedule', 'message'
        ]));
    }

    public function who_am_i()
    {
        return view('ui::front.who-am-i');
    }

    public function i_need_help()
    {
        return view('ui::front.i-need-help');
    }

    public function i_need_help_store()
    {
        dd(request()->only([
            'name', 'email', 'personal', 'professional', 'Organization', 'other', 'location', 'mailHelp', 'phoneHelp', 'message'
        ]));
    }

    public function mentoring_portal()
    {
        return view('ui::front.mentoring-portal');
    }
    public function share_experiences()
    {
        return view('ui::front.share-experiences');
    }

    public function share_experiences_store()
    {
        dd(request()->only([
            'name', 'title', 'location', 'category', 'message'
        ]));
    }

    /*
    * Create New Community and store
    */
    public function create_new_community()
    {
        return view('ui::front.create-new-community');
    }

    public function create_new_community_store()
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);

        $response = DB::table('community')->insert(request()->only(['name', 'description', 'category']));

        if ($response) {
            session()->flash('success', trans('Submit your data'));
        } else {
            session()->flash('danger', trans('Error'));
        }

        return redirect()->back();
    }

    /*
    * Create New Edutainment Culture and Lifestyle
    */
    public function edutainment_culture_and_lifestyle()
    {
        return view('ui::front.edutainment-culture-and-lifestyle');
    }

    public function edutainment_culture_and_lifestyle_store()
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);

        $response = DB::table('lifestyle_store')->insert(request()->only([
            'name', 'startdate', 'enddate', 'category', 'location', 'description'
        ]));

        if ($response) {
            session()->flash('success', trans('Submit your data'));
        } else {
            session()->flash('danger', trans('Error'));
        }

        return redirect()->back();
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
