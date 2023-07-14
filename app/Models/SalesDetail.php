<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    protected $table = 'sales_detail';
    protected $fillable = ["id","sales_id","menu_id","qty"];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu','menu_id');
    }

}
