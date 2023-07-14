<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuInfoSeeder::class);
        $this->call(MenuCategroySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(OutletSeeder::class);
    }
}
