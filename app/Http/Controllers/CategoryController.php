<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $categories = Category::all();
        return response()->view('cms.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return response()->view('cms.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

         $validator = Validator($request->all(), [
            'name' => 'required|string',
        ], []);

        if (!$validator->fails()) {
            $categories = new Category();
            $categories->name = $request->input('name');
            $categories->status = $request->input('status');
            $categories->description = $request->input('description');

            $isSaved = $categories->save();
            return response()->json([
                'icon' => 'success',
                'title' => 'Created is Successfully'
            ], 200);
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
         $categories = Category::find($id);
        return response()->view('cms.category.show', compact('categories'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories  = Category::findOrFail($id);
        return response()->view('cms.category.edit', compact('categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

         $validator = Validator($request->all(), [
            'name' => 'required',
        ], []);

        if (!$validator->fails()) {
            $categories = Category::findOrFail($id);
            $categories->name = $request->input('name');
            $categories->status = $request->input('status');
            $categories->description = $request->input('description');

            $isSaved = $categories->save();

            return ['redirect' => route('categories.index')];
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

         $categories = Category::destroy($id);
    }
}
