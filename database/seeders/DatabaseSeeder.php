<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::updateOrCreate([
            'username' => 'admin',
            'email' => 'admin@mail.com',
        ],[
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => 'LibbreCreative@024',
            'name' => 'Admin',
        ]);
        $this->call(CompanySettingSeeder::class);
    }
}
