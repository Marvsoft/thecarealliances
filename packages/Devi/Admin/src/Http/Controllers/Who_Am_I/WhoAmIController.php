<?php

namespace Devi\Admin\Http\Controllers\Who_Am_I;

use Illuminate\Support\Facades\DB;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\Repositories\WhoamiRepository;
use Devi\Post\Repositories\WhoamiSubCategoryRepository;
use Devi\Post\DataGrids\WhoAmISubCategoryDatagrid;
use Illuminate\Http\Request;
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
        $categories = WhoamIPage::get();
        return view('admin::who_am_i.mainCategory.index',compact('categories'));
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
        // if (request()->ajax()) {
        //     return app(WhoAmISubCategoryDatagrid::class)->toJson();
        // }
        $sub_cat =Whoami::with('getCategory')->orderBy('id','DESC')->get();


        return view('admin::who_am_i.subCategory.index',compact('sub_cat'));
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

    public function edit($id){
        try {
            $category = WhoamIPage::where('id',$id)->first();
            return view('admin::who_am_i.mainCategory.edit', compact('category'));
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function update(Request $request){
        try {
            $this->validate(request(), [
                'header' => 'required',
            ]);

            $categoryData = [
                'header'        => $request->header,
                'description'   => $request->content,
                'status' => request()->has('status') ? 1 : 0
            ];
            WhoamIPage::where('id',$request->id)->update($categoryData);

            session()->flash('success', 'Category update successfully.');

        return redirect()->route('admin.who-am-i.main-category.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function editSubCategory($id){
        try {
            $sub_cat = Whoami::where('id',$id)->first();
            $categories =WhoamIPage::get();
            return view('admin::who_am_i.subCategory.edit', compact('sub_cat','categories'));
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function updateSubCategory(Request $request){
        try {
            $this->validate(request(), [
                'header' => 'required',
            ]);

            $categoryData = [
                'header'        => $request->header,
                'who_am_i_page_id'   => $request->who_am_i_page_id,
                'description'   => $request->description,
                'status' => request()->has('status') ? 1 : 0
            ];
            Whoami::where('id',$request->id)->update($categoryData);

            session()->flash('success', 'Sub Category update successfully.');

        return redirect()->route('admin.who-am-i.sub-category.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
