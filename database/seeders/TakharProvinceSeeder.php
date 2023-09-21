<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class TakharProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
            'name' => 'تخار',
            'en_name' => 'Takhar',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}