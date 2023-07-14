<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $fillable = ["id","outlet_id","customer_id","no_order","sales_date","total_price"];
    protected $dates = ['sales_date'];

    public function salesDetail()
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
}
