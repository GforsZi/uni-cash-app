<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\F_Finance>
 */
class FinalFinanceFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      "user_id" => User::factory(),
      "keterangan" => fake()->sentence(),
      "nominal" => 10000,
      "note" => fake()->sentence(),
    ];
  }
}
