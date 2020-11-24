<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,10) as $value) {
            
            DB::table('articles')->insert([
                'title' => "title $value",
                'slug' => "Title-$value",
                'body' => "This is a title of  $value"
            ]);
        }
    }
}
