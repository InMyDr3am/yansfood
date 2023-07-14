<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::select('id', 'name', 'menu_category_id', 'qty_stock','menu_info_id')
                        ->orderBy('name', 'ASC')->get();
        $categories = MenuCategory::all();
        return view('menu.index', compact('menus', 'categories'));
    }

    public function store(Request $request)
    {
        if($request->qty_stock < 20)
        {
            $menu_info_id = 1;
        }
        elseif($request->qty_stock >= 20 && $request->qty_stock < 40)
        {
            $menu_info_id = 2;
        }
        else
        {
            $menu_info_id = 3;
        }

        $menu = Menu::create([
            'menu_category_id' => $request->get('menuCategoryId'),
            'name' => $request->get('name'),
            'qty_stock' => $request->get('qty_stock'),
            'menu_info_id' => $menu_info_id
        ]);

        return redirect('/menu')->with('success', 'Data menu berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        if($request->qty_stock < 20)
        {
            $menu_info_id = 1;
        }
        elseif($request->qty_stock >= 20 && $request->qty_stock < 40)
        {
            $menu_info_id = 2;
        }
        else
        {
            $menu_info_id = 3;
        }
        
        $menu->update([
            'menu_category_id' => $request->get('menuCategoryId'),
            'name' => $request->get('name'),
            'qty_stock' => $request->get('qty_stock'),
            'menu_info_id' => $menu_info_id
        ]);

        return redirect('/menu')->with('success', 'Data menu berhasil diperbarui');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect('/menu')->with('success', 'Data menu berhasil dihapus');
    }
}
