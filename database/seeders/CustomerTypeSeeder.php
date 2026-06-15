<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use function PHPSTORM_META\type;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Bank Staff', 'Fammer', 'Employee', 'Businessman', 'Businesswoman', 'Actor', 'Civil servants'];

        foreach ($types as $type) {
            CustomerType::firstOrCreate(['name' => $type]);
        }
    }
}
