<?php

namespace Devi\Post\Http\Controllers\Tag;

use Illuminate\Support\Str;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\DataGrids\TagDataGrid;
use Devi\Post\Repositories\TagRepository;

class TagController extends Controller
{
    /**
     * Create a new controller instance.
     * @param  Devi\Tag\Repositories\TagRepository  $TagRepository;
     * 
     * @return void
     */
    public function __construct(
        protected TagRepository $tagRepository
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
            return app(TagDataGrid::class)->toJson();
        }

        return view('post::tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('post::tag.create');
    }


     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'slug' => 'required|string|unique:tags,slug',
            'name' => 'required',
        ]);

        request()->merge([
            'slug' => Str::slug(request()->input('slug')),
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->tagRepository->create(request()->only('slug', 'name', 'status'))->save();

        session()->flash('success', trans('admin::app.tags.create-success'));

        return redirect()->route('admin.tags.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tag = $this->tagRepository->findOrFail($id);

        return view('post::tag.edit', compact('tag'));
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
            'slug'            => 'required|unique:tags,slug,' . $id,
            'name'             => 'required',
        ]);

        request()->merge([
            'slug'   => Str::slug(request()->input('slug')),
            'status' => request()->has('status') ? 1 : 0
        ]);

        $this->tagRepository->update(request()->only('slug', 'name', 'status'), $id);

        session()->flash('success', trans('admin::app.tags.update-success'));

        return redirect()->route('admin.tags.index');
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
            $this->tagRepository->delete($id);

            return response()->json([
                'message' => trans('admin::app.tags.delete-success'),
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
        $this->tagRepository->deleteWhereIn((array) request()->input('rows'), 'id');
        
        return response()->json([
            'message' => trans('admin::app.tags.mass-delete-success'),
        ]);
    }

     /**
     * Mass update the specified resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function massUpdate()
    {
        $this->tagRepository->updateWhereIn((array) request()->input('rows'), 'id', request()->input('value'));
        
        return response()->json([
            'message' => trans('admin::app.tags.mass-update-success'),
        ]);
    }
}