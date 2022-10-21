<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.blog_create')->with(['blogs' => $blog, 'tags' => $tags, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->post();
        $blog = Blog::create([
            'title' => Arr::get($data ,'title'),
            'blog_by' => Arr::get($data ,'blog_by'),
            'short_desc' => Arr::get($data ,'short_desc'),
            'long_desc' => Arr::get($data ,'long_desc'),
            'is_active' => Arr::get($data ,'is_active', 0) == "on" ? 1 : 0,
            'category_id' => Arr::get($data ,'category_id'),
            'tag_id' => Arr::get($data ,'tag_id'),
        ]);
        if ($request->hasFile('image')) {
            $image = time().'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/image/blog', $image);
            $blog->image = $image;
            $blog->save();
        }

        session()->flash('success', 'Added Successfully');
        return redirect()->route('addBlog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog_edit')->with(['blog' => $blog, 'blogs' => Blog::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
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
