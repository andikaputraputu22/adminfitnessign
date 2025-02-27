<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Fitnessign',
            'email' => 'admin.fitnessign@gmail.com',
            'phone' => '081339891936',
            'is_admin' => true,
            'password' => Hash::make('kudanil123')
        ]);

        Category::factory()->create([
            'name' => 'Indoor'
        ]);

        Category::factory()->create([
            'name' => 'Outdoor'
        ]);

        Service::factory()->create([
            'name' => 'Twisting Yoga',
            'description' => 'Latihan yoga yang akan fokus pada gerakan gerakan memutar (twisting) tubuh.',
            'category_id' => 1
        ]);

        Service::factory()->create([
            'name' => 'Pectoralis Exercise',
            'description' => 'Latihan ini merupakan latihan untuk meningkatkan kekuatan dan daya tahan otot Dada dan perut.',
            'category_id' => 2
        ]);

        // Service::factory(10)->recycle(Category::factory(2)->create())->create();
    }
}
