<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use Illuminate\Database\Seeder;

class MenuCategroySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCategory::create([
            'name' => 'Makanan',
        ]);
        MenuCategory::create([
            'name' => 'Minuman',
        ]);
    }
}
