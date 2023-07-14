<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::select('id', 'name')
                        ->orderBy('name', 'ASC')->get();
        return view('menu-category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = MenuCategory::create([
            'name' => $request->get('name'),
        ]);

        return redirect('/menu/category')->with('success', 'Data kategori menu berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $category = MenuCategory::findOrFail($id);
        
        $category->update([
            'name' => $request->get('name'),
        ]);

        return redirect('/menu/category')->with('success', 'Data kategori menu berhasil diperbarui');
    }

    public function destroy($id)
    {
        $category = MenuCategory::findOrFail($id);
        $category->delete();

        return redirect('/menu/category')->with('success', 'Data kategori menu berhasil dihapus');
    }
}
