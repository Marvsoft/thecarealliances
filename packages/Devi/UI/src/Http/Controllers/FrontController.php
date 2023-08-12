<?php

namespace Devi\UI\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Devi\User\Models\UserLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
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

    /*
    * Create New Community and store
    */
    public function create_new_community()
    {
        return view('ui::front.create-new-community');
    }

    /*
    * Create New Edutainment Culture and Lifestyle
    */
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

    /**
     * Registration
     */
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

    /**
     * Login
     */
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

    /**
     * Logout
     */
    public function logout()
    {
        Auth::guard('user_login')->logout();
        session()->forget('user');

        return redirect()->route('ui.front.index')->with('success', 'Logged out successfully!');
    }

    /**
     * Reset
     */
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
