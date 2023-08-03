<?php

namespace Devi\Post\Http\Controllers\Post;

use Illuminate\Support\Str;
use Devi\Admin\Http\Controllers\Controller;
use Devi\Post\DataGrids\PostDataGrid;
use Devi\Post\Repositories\CategoryRepository;
use Devi\Post\Repositories\PostRepository;
use Devi\Post\Repositories\PostTagRepository;
use Devi\Post\Repositories\TagRepository;
use Devi\User\Repositories\RoleRepository;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  Devi\Post\Repositories\CategoryRepository  $categoryRepository
     * @param  Devi\Post\Repositories\TagRepository  $tagRepository
     * @param  Devi\Post\Repositories\PostRepository $postRepository
     * @param  Devi\Post\Repositories\TagRepository $postTagRepository
     * @return void
     */
    public function __construct(
        protected CategoryRepository $categoryRepository,
        protected TagRepository $tagRepository,
        protected PostRepository $postRepository,
        protected PostTagRepository $postTagRepository,
        protected RoleRepository $roleRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(PostDataGrid::class)->toJson();
        }

        return view('post::post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->categoryRepository->findWhere([
            'status' => 1,
        ])->pluck('name', 'id');

        $tags = $this->tagRepository->findWhere(['status' => 1])->pluck('name', 'id');

        $post = $this->postRepository->with('tags')->findOneWhere(['status' => 1]);

        return view('post::post.create', compact('categories', 'tags', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'slug' => 'required|string|unique:posts,slug',
            'title' => 'required',
            'content' => 'required',
        ]);

        request()->merge([
            'slug' => Str::slug(request()->input('slug')),
            'status' => request()->has('status') ? 1 : 0,
            'cat_id' => request()->input('parent_id'),
        ]);

        $post = $this->postRepository->create(request()->only('slug', 'title', 'status', 'content', 'cat_id'));

        if (request()->has('tags')) {
            $this->postTagRepository->deleteWhereIn(request()->input('tags'), 'post_id');

            $this->postTagRepository->createPostTag(request()->input('tags'), $post->id);
        }

        session()->flash('success', trans('admin::app.posts.create-success'));

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $admin = $this->postRepository->findOneWhere(['id' => $id, 'status' => 1]);

        $roles = $this->roleRepository->get();
        // dd($role);
        return view('post::post.edit', compact('admin', 'roles'));
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
        dd(request()->input('rows'));
        $this->postRepository->deleteWhereIn((array) request()->input('rows'), 'id');

        if (request()->has('rows')) {
            foreach (request()->input('rows') as $key => $value) {

                $this->postTagRepository->deleteWhere([
                    'post_id' => $value
                ]);
            }
        }

        return response()->json([
            'message' => trans('admin::app.posts.mass-delete-success'),
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
