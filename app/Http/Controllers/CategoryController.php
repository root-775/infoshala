<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category_add')->with(['category' => $category]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Category::firstOrCreate(
                [
                    'name' => $request->post('category_name')
                ],
                [
                    'is_active' => $request->post('category_status') == "on" ? 1 : 0
                ]
            );

        session()->flash('success', 'Added Successfully');
        return redirect()->route('addCategory');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $categoryEdit = Category::find($id);
        $category = Category::all();
        return view('admin.category_edit')->with(['catEdit' => $categoryEdit, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        Category::updateOrCreate(
            [
                'id' => $request->post('category_id')
            ],
            [
                'name' => $request->post('category_name'),
                'is_active' => $request->post('category_status') == "on" ? 1 : 0
            ]
        );
        session()->flash('success', 'Updated Successfully');
        return redirect()->route('addCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        session()->flash('success', 'Deleted Successfully');
        return redirect()->route('addCategory');
    }
}
