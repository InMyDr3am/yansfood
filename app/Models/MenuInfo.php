<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuInfo extends Model
{
    protected $table = 'menu_info';
    protected $fillable = ["id","name"];
}
