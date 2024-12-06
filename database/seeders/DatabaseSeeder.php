<?php

namespace Database\Seeders;

use App\Models\Talk;
use App\Models\User;
use App\Models\Venue;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Speaker;
use App\Models\Attendee;
use App\Models\Conference;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JuanJota',
            'email' => 'esnola@gmail.com',
            'password' => bcrypt('1234'),
        ]);
        Conference::factory(75)->create();
        Speaker::factory(50)->create();
        Talk::factory(25)->create();
        Venue::factory(25)->create();
        Speaker::factory(25)->withTalks(1)->create();
        Attendee::factory(307)->create();
        //\App\Models\User::factory(10)->create();
        // // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}