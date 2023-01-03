<?php

namespace Database\Seeders;

use App\Models\Learner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Learner::factory()->count(1)->create();
    }
}
