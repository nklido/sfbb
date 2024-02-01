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
        $this->call(PostalCodesTableSeeder::class);
        $this->call(StreetsTableSeeder::class);
        $this->call(StreetNumbersTableSeeder::class);
    }
}
