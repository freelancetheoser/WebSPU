<?php

namespace Database\Seeders;

use App\Models\Fashion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fashion::factory(10)->create();
    }
}
