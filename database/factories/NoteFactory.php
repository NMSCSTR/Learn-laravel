<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Note;
use App\Models\User;

/**
 * @extends Factory<Note>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class; // Ensure the correct model is used

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'note' => fake()->realText(2000),
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(), // Assigns an existing user or creates one
        ];
    }
}
