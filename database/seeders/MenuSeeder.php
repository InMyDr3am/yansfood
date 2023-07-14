<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Risol Ayam',
            'menu_category_id' => '1',
            'qty_stock' => 100,
            'menu_info_id' => 3,
        ]);
        Menu::create([
            'name' => 'Risol Mayo',
            'menu_category_id' => '1',
            'qty_stock' => 100,
            'menu_info_id' => 3,
        ]);
        Menu::create([
            'name' => 'Pisang Coklat',
            'menu_category_id' => '1',
            'qty_stock' => 100,
            'menu_info_id' => 3,
        ]);
        Menu::create([
            'name' => 'Teh Botol',
            'menu_category_id' => '2',
            'qty_stock' => 40,
            'menu_info_id' => 2,
        ]);
        Menu::create([
            'name' => 'Kopi Susu',
            'menu_category_id' => '2',
            'qty_stock' => 25,
            'menu_info_id' => 2,
        ]);
        
    }
}
