<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reader_id' => Reader::factory(),
            'book_id' => Book::factory(),
            'borrow_date' => $this->faker->date(),
            'return_date' => $this->faker->date(),
            'status' => $this->faker->boolean()
        ];
    }
}
