<?php

namespace ElFactory\AfghanistanProvinces\Database\Seeders;

use Illuminate\Database\Seeder;
use ElFactory\AfghanistanProvinces\Models\Province;

class NuristanProvinceSeeder extends Seeder
{
    public function run():void
    {
        // Create province
        $province = Province::create([
            'name' => 'نورستان',
            'en_name' => 'Nuristan',
        ]);

        // Create districts
        $province->districts()->createMany([
            // Add districts here...
            // ['name' => 'نام', 'en_name' => 'Name'],
        ]);
    }
}