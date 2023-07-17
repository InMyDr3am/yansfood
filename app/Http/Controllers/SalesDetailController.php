<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SalesDetail;
use Illuminate\Http\Request;

class SalesDetailController extends Controller
{
    public function saveDetail(Request $request, $id)
    {
        $salesDetail = SalesDetail::create([
            'sales_id' => $id,
            'menu_id' => $request->menuId,
            'qty' => preg_replace('/\D/','',$request->qty)
        ]);
            
        $menu = Menu::findOrFail($salesDetail->menu_id);
        $total_qty_stock = $menu->qty_stock - $salesDetail->qty;
        
        if( $total_qty_stock < 20){
            $menu_info_id = "1";
        }
        elseif( $total_qty_stock >= 20 && $total_qty_stock <40){
            $menu_info_id = "2";
        }
        else{
            $menu_info_id = "3";
        }
        
        $menu->update([
            'qty_stock' => $total_qty_stock,
            'menu_Info_id' => $menu_info_id
        ]);
        
        return redirect("/penjualan/detail-penjualan/{$id}")->with('success', 'Menu terjual berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $salesDetail = SalesDetail::findOrFail($id);
        $menu = Menu::findOrFail($salesDetail->menu_id);
        $total_qty_stock = $menu->qty_stock + $salesDetail->qty - preg_replace('/\D/','',$request->qty);
        
        if( $total_qty_stock < 20){
            $menu_info_id = "1";
        }
        elseif( $total_qty_stock >= 20 && $total_qty_stock <40){
            $menu_info_id = "2";
        }
        else{
            $menu_info_id = "3";
        }
        
        $menu->update([
            'qty_stock' => $total_qty_stock,
            'menu_Info_id' => $menu_info_id
        ]);

        $salesDetail->update([
            'menu_id' => $request->menuId,
            'qty' => preg_replace('/\D/','',$request->qty)
        ]);

        return redirect("/penjualan/detail-penjualan/{$salesDetail->sales_id}")->with('success', 'Detail penjualan berhasil diubah');
    }

    public function destroy($id)
    {
        $salesDetail = SalesDetail::findOrFail($id);
        $menu = Menu::findOrFail($salesDetail->menu_id);
        $total_qty_stock = $menu->qty_stock + $salesDetail->qty;
        
        if( $total_qty_stock < 20){
            $menu_info_id = "1";
        }
        elseif( $total_qty_stock >= 20 && $total_qty_stock <40){
            $menu_info_id = "2";
        }
        else{
            $menu_info_id = "3";
        }
        
        $menu->update([
            'qty_stock' => $total_qty_stock,
            'menu_Info_id' => $menu_info_id
        ]);

        $salesDetail->delete();

        return redirect("/penjualan/detail-penjualan/{$salesDetail->sales_id}")->with('success', 'Data menu terjual berhasil dihapus');
    }
}
