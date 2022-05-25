<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $news_name = $this->faker->unique()->words($nb=4, $asText=true);
        $image_name = 'news_photo.jpg';
        return [
            'name' => $news_name,
            'header' => $this->faker->text(20),
            'main_text' => $this->faker->text(200),
            'image' => $image_name,
            'images' => 'news_'.$this->faker->unique()->numberBetween(1,1000).'.jpg',
            'category_id' => $this->faker->numberBetween(1,7)
        ];
    }
}
