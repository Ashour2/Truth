<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Gaza City', 'street' => 'Al-Rimal', 'country_id' => 1],
            ['name' => 'Ramallah', 'street' => 'Al-Masyoun', 'country_id' => 1],
            ['name' => 'Jerusalem', 'street' => 'Al-Quds Street', 'country_id' => 1],
            ['name' => 'Cairo', 'street' => 'Nasr City', 'country_id' => 2],
            ['name' => 'Amman', 'street' => 'Abdoun', 'country_id' => 3],
            // أضف المزيد حسب الحاجة
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
