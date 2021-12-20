<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $parentCategories = Category::where('category_id', null)->get();

        return view('panel.categories.index', compact('parentCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories'],
            'category_id' => ['nullable', 'exists:categories,id']
        ]);

        Category::create(
            $request->only(['name', 'slug', 'category_id'])
        );

        session()->flash('status', 'دسته بندی مد نظر به درستی ایجاد شد!');

        return back();
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
