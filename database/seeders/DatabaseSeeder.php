<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class
        ]);
        
        $comments = Comment::all()->count();

        for ($i = 0; $i < $comments; $i++) {
            $total_data[$i]['comment_id'] = Comment::all()->random()->id;
            $total_data[$i]['article_id'] = Article::all()->random()->id;
            $total_data[$i]['created_at'] = now();
            $total_data[$i]['updated_at'] = now();
        }

        foreach (array_chunk($total_data, 10) as $comment) {
            DB::table('article_comment')->insert($comment);
        }
    }
}
