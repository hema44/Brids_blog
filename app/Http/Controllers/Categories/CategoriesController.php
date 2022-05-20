<?php

namespace App\Http\Controllers\Categories;


use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {

        return view('categories.index')->with('categories', Category::all());
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(CreateCategoryRequest $request)
    {

        Category::create([
            'name' => $request->name
        ]);

        return redirect(route('categories.index'))->with('success', 'Your Category is successfully added !');

    }


    public function show($id)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('categories.create')->with('category', $category);

    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);

        return redirect(route('categories.index'))->with('success', 'Your category is successfully updated ! ');
    }


    public function destroy(Category $category)
    {
        if($category->post->count() > 0){

            return redirect()->back()->with('error', 'This category cannot be deleted because it has some posts! ');

        }

        $category->delete();

        return redirect(route('categories.index'))->with('success', 'Your category is successfully deleted ! ');

    }
}
