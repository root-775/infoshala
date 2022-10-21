<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag_add')->with(['tags' => $tags]);
    }

    public function store(Request $request)
    {
        Tag::firstOrCreate(
            [
                'name' => $request->post('tag_name')
            ],
            [
                'is_active' => $request->post('tag_status') == "on" ? 1 : 0
            ]
        );

    session()->flash('success', 'Added Successfully');
    return redirect()->route('addTag');
    }

    public function edit($id)
    {
        $tagEdit = Tag::find($id);
        $tags = Tag::all();
        return view('admin.tag_edit')->with(['tagEdit' => $tagEdit, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        Tag::updateOrCreate(
            [
                'id' => $request->post('tag_id')
            ],
            [
                'name' => $request->post('tag_name'),
                'is_active' => $request->post('tag_status') == "on" ? 1 : 0
            ]
        );
        session()->flash('success', 'Updated Successfully');
        return redirect()->route('addTag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();
        session()->flash('success', 'Deleted Successfully');
        return redirect()->route('addTag');
    }
}
