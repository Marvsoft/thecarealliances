<?php

namespace Devi\Post\Http\Controllers\Category;

use Illuminate\Support\Str;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\DataGrids\CategoryDatagrid;
use Devi\Post\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    
    /**
     * Create a new controller instance.
     * 
     * @param Devi\Post\Repositories\CategoryRepository  $categoryRepository 
     *
     * @return void
     */
    public function __construct(
        protected CategoryRepository $categoryRepository
    )
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CategoryDatagrid::class)->toJson();
        }

        return view('post::category.index');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->categoryRepository->findWhere(['status' => 1])->pluck('name', 'id');

        return view('post::category.create', compact('categories'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'slug' => 'required|string|unique:categories,slug',
            'name' => 'required',
            'parent_id' => 'integer',
        ]);

        request()->merge([
            'slug' => Str::slug(request()->input('slug')),
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->categoryRepository->create(request()->only('slug', 'name', 'status' ,'parent_id'))->save();

        session()->flash('success', trans('admin::app.categorys.create-success'));

        return redirect()->route('admin.category.index');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findOrFail($id);

        $categories = $this->categoryRepository->findWhere(['status' => 1])->pluck('name', 'id');

        return view('post::category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate(request(), [
            'slug'      => 'required|unique:categories,slug,' . $id,
            'name'      => 'required',
            'parent_id' => 'integer',
        ]);

        request()->merge([
            'slug'   => Str::slug(request()->input('slug')),
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->categoryRepository->update(request()->only('slug', 'name', 'status', 'parent_id'), $id);

        session()->flash('success', trans('admin::app.category.update-success'));

        return redirect()->route('admin.category.index');
    }

     /**
     * Destroy specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->categoryRepository->delete($id);

            return response()->json([
                'message' => trans('admin::app.category.delete-success'),
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], 400);
        }
    }

      /**
     * Mass Delete the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massDestroy()
    {
        $this->categoryRepository->deleteWhereIn((array) request()->input('rows'), 'id');
        
        return response()->json([
            'message' => trans('admin::app.category.mass-delete-success'),
        ]);
    }

     /**
     * Mass update the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massUpdate()
    {
        $this->categoryRepository->updateWhereIn((array) request()->input('rows'), 'id', request()->input('value'));
        
        return response()->json([
            'message' => trans('admin::app.category.mass-update-success'),
        ]);
    }
}