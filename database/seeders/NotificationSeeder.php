<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Notification;
use App\Models\User;

class NotificationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Notification::factory(5)->recycle([User::factory(3)->create()])->create();
  }
}
