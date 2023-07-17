<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Menu;
use App\Models\Outlet;
use App\Models\Sales;
use App\Models\SalesDetail;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Sales $model)
    {
        $sales = $model->getAllData();
        return view('sales.index', compact('sales'));
    }

    public function allOutletByDate(Sales $model, $date)
    {
        $sales_date = $date;
        $sales = $model->getAllRecapData($date);
        return view('sales.all-recap-data', compact('sales', 'sales_date'));
    }

    public function showByOutlet(Sales $model, $outlet_name)
    {
        $outlet = $model->getOutlet($outlet_name);
        $outlet_id = $outlet->id;
        $sales = $model->getDataByOutlet($outlet_id);
        return view('sales.all-data-by-outlet', compact('sales', 'outlet'));
    }

    public function showByOutletDate(Sales $model, $outlet_name, $date)
    {
        $outlet = $model->getOutlet($outlet_name);
        $outlet_id = $outlet->id;
        $sales_date = $date;
        $sales = $model->getRecapByOutletDate($outlet_id, $sales_date);
        return view('sales.all-recap-data-by-outlet', compact('sales', 'sales_date', 'outlet'));
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $customer = Customer::create([
            'outlet_id' => $request->outlet_id,
            'name' => $request->customer_name,
        ]);

        //save sales
        $sales = Sales::create([
            'customer_id' => $customer->id,
            'outlet_id' => $customer->outlet_id,
            'no_order' => $request->no_order,
            'sales_date' => $request->sales_date,
            'total_price' => preg_replace('/\D/','',$request->total_price)
        ]);

        //looping untuk save sales detail sebanyak form yg diisi
        foreach ($request->salesDetail as $sdt) {
            SalesDetail::create([
                'sales_id' => $sales->id,
                'menu_id' => $sdt['menu_id'],
                'qty' => preg_replace('/\D/','', $sdt['qty'])
            ]);

            //mencari setiap stock menu yg dibeli agar diupdate jml & info
            $cari_menu = Menu::findOrFail($sdt['menu_id']);
            $total_qty = $cari_menu->qty_stock - preg_replace('/\D/','', $sdt['qty']);
            
            if( $total_qty < 20){
                $menu_info_id = "1";
            }
            elseif( $total_qty >= 20 && $total_qty <40){
                $menu_info_id = "2";
            }
            else{
                $menu_info_id = "3";
            }
            
            //update stock produk
            $cari_menu->update([
                'qty_stock' => $total_qty,
                'menu_Info_id' => $menu_info_id
            ]);
        }

        return redirect('/penjualan')->with('success', 'Data penjualan berhasil disimpan');
    }

    public function showDetail(Sales $model, $id)
    {
        $sales = $model->getDetail($id);
        return view('sales.detail', compact('sales'));     
    }
}
