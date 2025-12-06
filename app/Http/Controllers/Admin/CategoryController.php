<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('childrenRecursive')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.form', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category created.');
    }

    public function edit(Category $category)
    {
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('admin.categories.form', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted.');
    }

    // Build nested tree (n-level) from flat collection
    // protected function buildTree($items)
    // {
    //     $items = $items->keyBy('id')->toArray();
    //     $tree = [];

    //     // add children array to each
    //     foreach ($items as $id => &$item) {
    //         $item['children'] = [];
    //     }

    //     foreach ($items as $id => &$item) {
    //         if ($item['parent_id']) {
    //             $items[$item['parent_id']]['children'][] = &$item;
    //         } else {
    //             $tree[] = &$item;
    //         }
    //     }

    //     return $tree;
    // }

    public function tree()
    {
        $categories = Category::whereNull('parent_id')
                            ->with('children')
                            ->get();

        return view('admin.categories.tree', compact('categories'));
    }
}