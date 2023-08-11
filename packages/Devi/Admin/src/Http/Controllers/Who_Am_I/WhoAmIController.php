<?php

namespace Devi\Admin\Http\Controllers\Who_Am_I;

use Illuminate\Support\Facades\DB;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\Repositories\WhoamiRepository;
use Devi\Post\Repositories\WhoamiSubCategoryRepository;
use Devi\Post\DataGrids\WhoAmISubCategoryDatagrid;
use App\Models\Whoami;
use App\Models\WhoamIPage;


class WhoAmIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  Devi\Post\Repositories\WhoamiRepository  $whoamiRepository
     * @return void
     */
    public function __construct(
        protected WhoamiRepository $whoamiRepository,
        protected WhoamiSubCategoryRepository $whoamiSubCategoryRepository,
    ) {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $whomICategories = WhoamIPage::with('getSubCategory')->get();
        return view('admin::who_am_i.mainCategory.index',compact('whomICategories'));
    }

    /**
     * Display a Craete page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin::who_am_i.mainCategory.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'header' => 'required',
        ]);

        // Generating Slug with the hepl of header and Replace spaces with hyphens in lowercase
        $slug = str_replace(' ', '-', strtolower(preg_replace('/[^A-Za-z0-9-]+/', ' ', request()->input('header'))));

        request()->merge([
            'slug' => $slug,
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->whoamiRepository->create(request()->only('header', 'status', 'description', 'slug'))->save();

        session()->flash('success', trans('admin::app.categorys.create-success'));

        return redirect()->route('admin.who-am-i.main-category.index');
    }

    public function subCategory()
    {
        if (request()->ajax()) {
            return app(WhoAmISubCategoryDatagrid::class)->toJson();
        }

        return view('admin::who_am_i.subCategory.index');
    }

    public function createSubCategory()
    {
        $categories = DB::table('who_am_i_page')->get();

        return view('admin::who_am_i.subCategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeSubCategory()
    {
        $this->validate(request(), [
            'header'            => 'required',
            'who_am_i_page_id'  => 'required',
        ]);

        // Generating Slug with the hepl of header and Replace spaces with hyphens in lowercase
        $slug = str_replace(' ', '-', strtolower(preg_replace('/[^A-Za-z0-9-]+/', ' ', request()->input('header'))));

        request()->merge([
            'slug' => $slug,
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->whoamiSubCategoryRepository->create(request()->only(
            'header',
            'status',
            'description',
            'slug',
            'who_am_i_page_id'
        ))->save();

        session()->flash('success', trans('admin::app.categorys.create-success'));

        return redirect()->route('admin.who-am-i.sub-category.index');
    }
}
