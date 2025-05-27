<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $pengguna =
        //     // User::factory(10)->create();
        //     $this->call([CategorySeeder::class, UserSeeder::class]);
        // Post::factory(100)->recycle(
        //     [
        //         Kategori::all(),
        //         User::All()
        //     ]
        // )->create();
    
        $this->call(AlumniSeeder::class);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
