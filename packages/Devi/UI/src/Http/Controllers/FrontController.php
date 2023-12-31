<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Devi\User\Models\UserLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\Community;
use App\Models\CreateYourPlan;
use App\Models\EdutainmentCultureLifestyle;
use App\Models\INeedHelp;
use App\Models\ICanHelp;
use App\Models\ShareExperience;
use App\Models\WhoAmI;
use App\Models\WhoamIPage;
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

    public function who_am_i(Request $request)
    {
        if($request->cat_id || $request->sub_cat_id){
            $sub_category = $request->sub_cat_id;
            // $whomICategories = WhoamIPage::whereIn('id',$request->cat_id)
            //                 ->with('getSubCategory')
            //                 ->with('getSubCategory',function($q) use ($sub_category){
            //                 // ->whereHas('getSubCategory',function($q) use ($sub_category){
            //                     $q->whereIn('id', $sub_category);
            //                     // $q->whereIn('who_am_i_page_id', $sub_category);
            //                 })
            //                 ->get();
            if(!empty($request->cat_id)){
                $Category = WhoamIPage::whereIn('id',$request->cat_id)->get();
            }else{
                $Category= [];
            }
            if(!empty($request->sub_cat_id)){
                $subCategory = WhoAmI::whereIn('id',@$request->sub_cat_id)->get();
            }else{
                $subCategory= [];
            }

            return view('ui::front.who-am-i-search',compact('Category','subCategory'));
        }else{
            $whomICategories = WhoamIPage::with('getSubCategory')->get();
        }
        return view('ui::front.who-am-i',compact('whomICategories'));
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
        $blogs = DB::table('posts')->get();

        return view('ui::front.blogs', compact('blogs'));
    }

    public function blog_detail($slug)
    {
        $blog = DB::table('posts')
            ->leftJoin('post_tags', 'posts.id', '=', 'post_tags.tag_id')
            ->leftJoin('tags', 'post_tags.tag_id', '=', 'tags.id')
            ->where('posts.slug', $slug)
            ->first();

        return view('ui::front.blog-detail', compact('blog'));
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
    public function registration(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $registration = UserLogin::create([
            'username' => $request->username,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password)
        ]);


        if ($registration) {
            Auth::guard('user_login')->login($registration);

            return redirect()->route('ui.front.index')->with('success', 'Registration Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function loginCheck(Request $request)
    {
        $check_email = UserLogin::where('email', $request->email)->first();

        if (!empty($check_email)) {
            $check_pass = Hash::check($request->password, $check_email->password);

            if ($check_pass) {
                // Log the user in
                Auth::guard('user_login')->login($check_email);

                // Store user data in session
                session()->put('user', $check_email);

                return view('ui::front.index');
            } else {
                return redirect()->back()->with('error', 'Incorrect Password!');
            }
        } else {
            return redirect()->back()->with('error', 'Email Not Registered!');
        }
    }

    public function logout()
    {
        Auth::guard('user_login')->logout();
        session()->forget('user');

        return redirect()->route('ui.front.index')->with('success', 'Logged out successfully!');
    }

    public function reset(Request $request)
    {
        $validated = request()->validate([
            'email' => 'required'
        ]);

        $generatePassword = Str::random(10);

        $user = UserLogin::where('email', request()->input('email'))->first();

        $user->password = Hash::make($generatePassword);
        // $user->password = $generatePassword;

        $user->save();

        $message = 'You new Password is ' .  $generatePassword;

        Mail::raw($message, function ($message) use ($request) {
            $message->to($request->email)->subject('Reset Password');
        });

        return redirect()->route('ui.front.index')->with('success', 'Logged out successfully!');
    }
}
