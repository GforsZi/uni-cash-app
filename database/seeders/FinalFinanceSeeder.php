<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\FinalFinance;
use App\Models\User;

class FinalFinanceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    FinalFinance::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
  }
}
