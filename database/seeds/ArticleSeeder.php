<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            DB::table('articles')->insert([
                'user_id' => 1,
                'title' => Str::random(15),
                'body' => Str::random(250),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            
        }
    }
}
