<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employers = \App\Models\Employer::factory(10)->create();

        $employers->each(function ($employer) {
            $employer->jobListings()->saveMany(Job::factory(5)->make());
        });
    }
}
