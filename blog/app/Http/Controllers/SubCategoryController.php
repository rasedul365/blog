<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sub_categories = SubCategory::with('category')->latest()->get();
        return view ('backend.sub_category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // dd($categories);

        return view ('backend.sub_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subCategory = SubCategory::with('categories')->findOrFail($id);
        // dd($subCategory);

        return view ('backend.sub_category.show', compact('subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view ('backend.sub_category.edit', [
            'sub_category_id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {

    }
}