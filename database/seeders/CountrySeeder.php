<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $countries = [
            ['name' => 'Palestine', 'code' => 'PS'],
            ['name' => 'Egypt', 'code' => 'EG'],
            ['name' => 'Jordan', 'code' => 'JO'],
            ['name' => 'Saudi Arabia', 'code' => 'SA'],
            ['name' => 'United States', 'code' => 'US'],
            // أضف المزيد حسب الحاجة
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
