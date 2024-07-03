<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article_types=[
            ['id' => 1, 'typeartical' => 'Breaking News', 'status' => 1],
            ['id' => 2, 'typeartical' => 'Local News', 'status' => 1],
            ['id' => 3, 'typeartical' => 'National News', 'status' => 1],
            ['id' => 4, 'typeartical' => 'International News', 'status' => 1],
            ['id' => 5, 'typeartical' => 'Business News', 'status' => 1], 
            ['id' => 6, 'typeartical' => 'Political News', 'status' => 1], 
            ['id' => 7, 'typeartical' => 'Sports News', 'status' => 1], 
            ['id' => 8, 'typeartical' => 'Entertainment News', 'status' => 1], 
            ['id' => 9, 'typeartical' => 'Technology News', 'status' => 1], 
            ['id' => 10, 'typeartical' => 'Health News', 'status' => 1], 
            ['id' => 11, 'typeartical' => 'Science News', 'status' => 1], 
            ['id' => 12, 'typeartical' => 'Lifestyle News', 'status' => 1], 
            ['id' => 13, 'typeartical' => 'Environmental News', 'status' => 1], 
        ];
        DB::table('article_types')->insert($article_types);
    }
}
