<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function products(Category $category)
    {
        return view('categories.products', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function save(Request $request)
    {
        $data = $request->all();

        $category = new Category();

        $category->title = $data['title'];
        $category->category_slug = str_slug($data['title']);
        $category->is_active = (!empty($data['is_active']) && $data['is_active'] == 'ok') ? true : false;

        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function change(Request $request, Category $category)
    {
        $data = $request->all();

        $dataToUpdate = [];

        if ($data['title'] != $category->title)
        {
            $dataToUpdate['title'] = $data['title'];
        }

        if ($category->is_active && !empty($data['is_active'])) {
            $dataToUpdate['is_active'] = true;
        }
        else if (!$category->is_active && empty($data['is_active'])) {
            $dataToUpdate['is_active'] = false;
        }

        $category->update($dataToUpdate);

        return redirect()->route('categories.index');
    }

    public function delete(Category $category)
    {
        //cancella la categoria
        $category->delete();

        return redirect()->route('categories.index');
    }

}
