<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Finance;
use App\Models\User;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Finance::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
    }
}
