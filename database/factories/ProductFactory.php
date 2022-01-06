<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(10),
            'category_id' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomNumber(1),
            'size' => $this->faker->word(2),
            'description' => $this->faker->text(100),
            'image' => json_encode([
                'image_1' => $this->faker->url,
                'image_2' => $this->faker->url,
            ]),
            'status' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
