<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ["id","menu_category_id","name","qty_stock","menu_info_id"];

    public function menuCategory()
    {
        return $this->belongsTo('App\Models\MenuCategory','menu_category_id');
    }

    public function menuInfo()
    {
        return $this->belongsTo('App\Models\MenuInfo','menu_info_id');
    }

}
