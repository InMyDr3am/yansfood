<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Outlet::create([
            'name' => 'Gofood',
        ]);
        Outlet::create([
            'name' => 'Shopeefood',
        ]);
        Outlet::create([
            'name' => 'Grabfood',
        ]);
    }
}
