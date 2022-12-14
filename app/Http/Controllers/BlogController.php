<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.list')->with([
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(StoreBlogRequest $request)
    {
        $this->authorize('create', Blog::class);

        $blog = Blog::create([
            'slug' => \Str::slug($request->get('title')),
            'user_id' => auth()->id(),
            ...$request->all()
        ]);

        return redirect()->route('blogs.show', $blog);
    }

    public function show(Blog $blog)
    {
        return view('blogs.view')->with([
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Blog\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
