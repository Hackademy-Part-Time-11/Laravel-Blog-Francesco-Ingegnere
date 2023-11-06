<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Core\Number;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->admin();
        \App\Models\User::factory(30)->create();
        $this->categories();

        \App\Models\Article::factory(50)->create();

        $this->categoriesToArticles();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    private function admin() {
        \App\Models\User::create([
            'name' => 'Administrator',
            'role' => 'admin',
            'email' => 'admin@example.it',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);
    }

    private function categories() {
        /* \App\Models\Category::create(['name' => 'Politica']);
        \App\Models\Category::create(['name' => 'Esteri']);
        \App\Models\Category::create(['name' => 'Cronaca']);
        \App\Models\Category::create(['name' => 'Sport']);
        \App\Models\Category::create(['name' => 'Gossip']);
        \App\Models\Category::create(['name' => 'Economia']);
        \App\Models\Category::create(['name' => 'Natura']);
        \App\Models\Category::create(['name' => 'Medicina']); */

        \App\Models\Category::insert([
            ['name' => 'Politica', 'created_at' => now()],
            ['name' => 'Esteri', 'created_at' => now()],
            ['name' => 'Cronaca', 'created_at' => now()],
            ['name' => 'Sport', 'created_at' => now()],
            ['name' => 'Gossip', 'created_at' => now()],
            ['name' => 'Economia', 'created_at' => now()],
            ['name' => 'Natura', 'created_at' => now()],
            ['name' => 'Medicina', 'created_at' => now()],
        ]);
    }

    private function categoriesToArticles() {
        
        foreach(\App\Models\Article::all() as $article) {
            if($article->id%2 == 0){
                $article->categories()->attach(['1', '2']);
            } else {
                $article->categories()->attach(['4', '5', '6']);
            }
        }


    }
}
