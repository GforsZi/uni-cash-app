<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Notification;
use App\Models\Finance;
use App\Models\FinalFinance;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    //         User::factory()->create([
    //             'name' => 'Test User',
    //             'email' => 'test@example.com',
    //         ]);

    User::factory(3)->create();

    User::factory()->create([
      "nik_name" => "admin",
      "name" => "admin",
      "password" => "password",
      "role" => "teacher",
      "info" => "account",
      "bio" => "first account",
    ]);
  }
}
