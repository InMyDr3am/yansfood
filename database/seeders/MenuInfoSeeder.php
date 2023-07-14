<?php

namespace Database\Seeders;

use App\Models\MenuInfo;
use Illuminate\Database\Seeder;

class MenuInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuInfo::create([
            'name' => 'Harus Restock',
        ]);
        MenuInfo::create([
            'name' => 'Aman',
        ]);
        MenuInfo::create([
            'name' => 'Sangat Aman',
        ]);
    }
}
