<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $categories = MenuCategory::all();
        return view('menu.index', compact('menus', 'categories'));
    }

    public function store(Request $request)
    {
        $menu = Menu::create([
            'menu_category_id' => $request->get('menuCategoryId'),
            'name' => $request->get('name'),
        ]);

        return redirect('/menu')->with('success', 'Data menu berhasil ditambahkan');
    }
}
