<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 11; $i++) {
            Detail::create([
                'book_id' => $i,
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'date' => $faker->date(),
                'body' => $faker->paragraph(),
                'image' => $faker->imageUrl(360, 200, 'book', true),
                'video' => $faker->imageUrl(360, 200, 'this is video', true)
            ]);
        }
    }
}
