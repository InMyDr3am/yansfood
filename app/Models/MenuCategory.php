<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    protected $table = 'menu_category';
    protected $fillable = ["id","name"];

    public function menu()
    {
        return $this->hasMany('App\Models\Menu');
    }
}
