<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Navigation;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = Subcategory::with(['parent'])->get();
        return view('admin_dashboard.subcategory.index', compact(['categories', 'subcategories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin_dashboard.subcategory.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
            'slug' => 'unique:subcategories,slug,',
        ]);

        $save = Subcategory::create([
            'name' => strtolower($request->input('name')),
            'slug' => trim(strtolower($request->input('slug'))) ? trim(strtolower($request->input('slug'))) : strtolower($request->input('name')),
            'category_id' => $request->input('parent_id'),
            'description' => trim(strtolower($request->input('description'))),
            'keywords' => trim(strtolower($request->input('keywords'))),
            'menu_status' => $request->input('menu_status'),
        ]);
        if ($save) {
            return redirect()->route('admin.subcategory.view')->with('success', 'Subcategory successfully created');
        } else {
            return redirect()->route('admin.subcategory.view')->with('error', 'Subcategory not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin_dashboard.subcategory.edit', compact(['subcategory', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'unique:categories,slug,'.$subcategory->id,
            'parent_id' => 'required',
        ]);
        $subcategory->name = strtolower($request->input('name'));
        $subcategory->slug = trim(strtolower($request->input('slug')));
        $subcategory->description = trim(strtolower($request->input('description')));
        $subcategory->keywords = trim(strtolower($request->input('keywords')));
        $subcategory->category_id = $request->input('parent_id');
        $subcategory->menu_status = $request->input('menu_status');

        if ($subcategory->save()) {
            return redirect()->route('admin.subcategory.view')->with('success', 'Subcategory successfully updated');
        } else {
            return redirect()->route('admin.subcategory.view')->with('error', 'Subcategory not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $deleted = $subcategory->delete();
        if ($deleted) {
            return redirect()->route('admin.subcategory.view')->with('success', 'Subcategory successfully deleted');
        } else {
            return redirect()->route('admin.subcategory.view')->with('error', 'Subcategory not deleted');
        }
    }
}
