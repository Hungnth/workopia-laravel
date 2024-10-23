<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load job listings from file
        $job_listings = include database_path('seeders/data/job_listings.php');

        // Get user ids from user model
        $user_ids = User::pluck('id')->toArray();

        foreach ($job_listings as &$job_listing) {
            // Assign user id to listing
            $job_listing['user_id'] = $user_ids[array_rand($user_ids)];

            // Add timestamps
            $job_listing['created_at'] = now();
            $job_listing['updated_at'] = now();
        }

        // Insert job listings
        DB::table('job_listings')->insert($job_listings);
        echo 'Jobs created successfully';
    }
}
