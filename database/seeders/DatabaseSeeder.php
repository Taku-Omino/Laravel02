<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 10個のUserモデルをファクトリーで作成して保存する
         //\App\Models\User::factory(10)->create();

         /*\App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);*/
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}