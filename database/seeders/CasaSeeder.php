<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Casa::create([
            "name" => '110'
        ]);

        Casa::create([
            "name" => '302'
        ]);
    }
}

