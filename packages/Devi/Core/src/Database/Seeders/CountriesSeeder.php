<?php

namespace Devi\Core\Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->delete();

        $countries = json_decode(file_get_contents(__DIR__ . '/../../Data/countries.json'), true);

        $d = DB::table('countries')->insert($countries);
    }
}