<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            [
                'name' => 'Sony Music Indonesia',
                'slug' => 'sony-music-indonesia',
                'ipi_name_number' => '00000000123',
                'society_code' => 'KCI',
                'is_active' => true,
            ],
            [
                'name' => 'Universal Music Indonesia',
                'slug' => 'universal-music-indonesia',
                'ipi_name_number' => '00000000456',
                'society_code' => 'KCI',
                'is_active' => true,
            ],
        ];

        foreach ($organizations as $organization) {
            Organization::firstOrCreate(
                ['slug' => $organization['slug']],
                $organization
            );
        }
    }
}
