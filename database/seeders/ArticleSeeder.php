<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $userIds = DB::table('users')->pluck('id')->all();
        if (empty($userIds)) {
            return;
        }

        for ($i = 0; $i < 100; $i++) {
            $title = $faker->sentence(6, true);
            $slug = Str::slug($title) . '-' . Str::random(6);
            $content = $faker->paragraphs(5, true);
            $excerpt = $faker->paragraph(2, true);

            DB::table('articles')->insert([
                'user_id' => $faker->randomElement($userIds),
                'title' => $title,
                'image_url' => $faker->optional()->imageUrl(800, 600),
                'content' => $content,
                'slug' => $slug,
                'excerpt' => $excerpt,
                'published' => $faker->boolean(70),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
