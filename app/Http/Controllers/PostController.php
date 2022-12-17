<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repository\Eloquent\PostRepository;
use App\Repository\PostRepositoryInterface;
use Illuminate\View\View;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Post::query()
            ->select('id', 'title', 'slug', 'published_at', 'author_id')
            // ->with(['author' => function($query){
            //     $query->select('id', 'name');
            // }])
            ->with('author:id,name')
            ->latest('published_at')
            ->get()
            ->groupBy(fn ($post) => $post->published_at->year);

        return view('posts.index', [
            'years' => $years
        ]);

        // return View::make('posts', ['years' => $years]);
        // return $this->postRepository->with('user:id,name')->latest()->get();
        // return $this->postRepository->latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:3'
        ]);

        return Post::create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $this->postRepository->find($post)->load('user:id,name');
        // return $post->load('user:id,name');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
