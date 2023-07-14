<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        $outlets = Outlet::select('id', 'name')->orderBy('name', 'ASC')->get();

        return view('outlet.index', compact('outlets'));
    }

    public function store(Request $request)
    {
        $outlet = Outlet::create([
            'name' => $request->get('name'),
        ]);

        return redirect('/outlet')->with('success', 'Data outlet berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $outlet = Outlet::findOrFail($id);
        
        $outlet->update([
            'name' => $request->get('name'),
        ]);

        return redirect('/outlet')->with('success', 'Data outlet berhasil diperbarui');
    }

    public function destroy($id)
    {
        $outlet = outlet::findOrFail($id);
        $outlet->delete();

        return redirect('/outlet')->with('success', 'Data outlet berhasil dihapus');
    }
}
