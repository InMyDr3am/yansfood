<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $fillable = ["id","outlet_id","customer_id","no_order","sales_date","total_price"];
    protected $dates = ['sales_date'];

    public function salesDetails()
    {
        return $this->hasMany('App\Models\SalesDetail');
    }

    public function outlet()
    {
        return $this->belongsTo('App\Models\Outlet','outlet_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }

    public function getAllData()
    {
        $sales = Sales::select('id', 'outlet_id', 'customer_id', 'sales_date','total_price')
                        ->groupBy('sales_date')
                        ->selectRaw('sum(total_price) as all_total_price')
                        ->get();
        return $sales;
    }

    public function getAllRecapData($date)
    {
        $sales = Sales::with('salesDetails')
                        ->where('sales_date', $date)
                        ->select('id', 'outlet_id', 'customer_id', 'sales_date','total_price')
                        ->get();
        return $sales;
    }

    public function getOutlet($outlet_name)
    {
        $outlet = Outlet::where('name', $outlet_name)->first();
        return $outlet;
    }

    public function getDataByOutlet($outlet_id)
    {
        $sales = Sales::where('outlet_id', $outlet_id)
                        ->select('id', 'outlet_id', 'customer_id', 'sales_date','total_price')
                        ->groupBy('sales_date')
                        ->selectRaw('sum(total_price) as all_total_price')
                        ->get();
        return $sales;
    }

    public function getRecapByOutletDate($outlet_id, $sales_date)
    {
        $sales = Sales::where(['outlet_id'=> $outlet_id, 'sales_date' => $sales_date])
                        ->select('id', 'outlet_id', 'customer_id', 'sales_date','total_price')
                        ->get();
        return $sales;
    }

    public function getDetail($id)
    {
        $sales = Sales::with('salesDetails')
                        ->where('id',$id)
                        ->get();
        return $sales;
    }
    
}
