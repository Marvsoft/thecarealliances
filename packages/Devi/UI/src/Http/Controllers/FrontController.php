<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\CreateYourPlan;
use App\Models\EdutainmentCultureLifestyle;
use App\Models\INeedHelp;
use App\Models\ICanHelp;
use App\Models\ShareExperience;
use Validator;

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

    public function community_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required',
                'interest_category' => 'required',
                'description'       => 'required',
            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $communityData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'name'              => $request->name,
                'interest_category' => $request->interest_category,
                'description'       => $request->description,
            ];
            Community::create($communityData);

            return redirect()->back()->with('message', 'Community created successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create_your_plan_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'category_id'       => 'required',
                'title'             => 'required',
                'start_date'        => 'required',
                'end_date'          => 'required',
                'description'       => 'required',
                'priority'          => 'required',
                'obstacles'         => 'required',

            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $communityData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'category_id'       => $request->category_id,
                'title'             => $request->title,
                'start_date'        => $request->start_date,
                'end_date'          => $request->end_date,
                'description'       => $request->description,
                'priority'          => $request->priority,
                'obstacles'         => $request->obstacles,
            ];
            CreateYourPlan::create($communityData);

            return redirect()->back()->with('message', 'Create Your Plan added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edutainment_culture_lifestyle_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required',
                'category_id'       => 'required',
                'start_date'        => 'required',
                'end_date'          => 'required',
                'description'       => 'required',
                'location'          => 'required',
            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $communityData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'category_id'       => $request->category_id,
                'name'              => $request->name,
                'start_date'        => $request->start_date,
                'end_date'          => $request->end_date,
                'description'       => $request->description,
                'location'          => $request->location,
            ];
            EdutainmentCultureLifestyle::create($communityData);

            return redirect()->back()->with('message', 'Edutainment Culture Lifestyle created successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function i_need_help_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required',
                'email'       => 'required',
                'topic'        => 'required',
                'location'          => 'required',
                'method_of_contact'          => 'required',
                'situation'       => 'required',
            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $communityData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'name'              => $request->name,
                'email'             => $request->email,
                'topic'             => !empty($request->topic) ? implode(',',$request->topic) : '',
                'location'          => $request->location,
                'method_of_contact' => !empty($request->method_of_contact) ? implode(',',$request->method_of_contact) : '',
                'situation'         => $request->situation,
            ];
            INeedHelp::create($communityData);

            return redirect()->back()->with('message', 'I need help created successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    //ICanHelp

    public function i_can_help_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required',
                'email'             => 'required',
                'type_of_help'      => 'required',
                'category_type'     => 'required',
                'category_id'       => 'required',
                'location'          => 'required',
                'location_type'     => 'required',
                'schedule'          => 'required',
                'message'           => 'required',
            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $communityData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'name'              => $request->name,
                'email'             => $request->email,
                'type_of_help'      => $request->type_of_help,
                'category_type'     => !empty($request->category_type) ? implode(',',$request->category_type) : '',
                'category_id'       => $request->category_id,
                'location'          => $request->location,
                'location_type'     => !empty($request->location_type) ? implode(',',$request->location_type) : '',
                'schedule'          => $request->schedule,
                'message'           => $request->message,
            ];
            ICanHelp::create($communityData);

            return redirect()->back()->with('message', 'I can help created successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function share_experiences_store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'name'              => 'required',
                'title'              => 'required',
                'location'              => 'required',
                'category'              => 'required',
                'content'              => 'required',
            ]);
            if($validator->fails()){
               return back()->withErrors($validator)->withInput();
            }
            $shareData = [
                'user_id'           => !empty(auth()->user()->id) ? auth()->user()->id : null,
                'name'              => $request->name,
                'title'             => $request->title,
                'location'          => $request->location,
                'category'          => $request->category,
                'content'           => $request->content,
            ];
            ShareExperience::create($shareData);

            return redirect()->back()->with('message', 'Share Experience created successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
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
