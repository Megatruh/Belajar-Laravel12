<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(5,8));

        // $nameMont = rand(1,31);
        // $nameMonth = fake()->monthName();
        // $year = fake()->year(range(2021,2026));
        // $date = $nameMonth . ', ' . $year;

        $startDate = strtotime('2023-02-01');
        $endDate = strtotime('2026-02-28');
        $randomTimestamp = rand($startDate, $endDate);
        $date = date('F Y', $randomTimestamp);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'city' => fake()->city(),
            'date' => $date,
            'body'=> fake()->paragraphs(rand(3,6), true)
        ];
    }
    // $table->id();
    //         $table->string('name');
    //         $table->string('slug');
    //         $table->timestamps();
}
