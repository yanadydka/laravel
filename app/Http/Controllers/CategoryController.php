<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.new_category');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Категория создана успешно!');
    }

    public function destroy(CategoryRequest $request)
    {
        $category = Category::find($request->category_id);
        if ($category) {
            $category->delete();
        }

        return redirect()->route('admin.index')->with('success', 'Категория удалена успешно!');
    }
}