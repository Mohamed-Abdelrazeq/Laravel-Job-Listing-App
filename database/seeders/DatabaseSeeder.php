<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $employers = Employer::factory(20)->create();
        $tags = Tag::factory(10)->create();

        $jobs = Job::factory(500)->create()->each(function ($job) use ($tags) {
            $jobTags = $tags->random(rand(1, 3))->pluck('id');
            $job->tags()->attach($jobTags);
        });
    }
}
