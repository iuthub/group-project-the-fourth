<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'name'=>'Welcome',
                'author'=>'team',
                'category'=>'message',
                'description'=>'Welcome to our blog!'
            ],
            [
                'name'=>'First article',
                'author'=>'elina@elina',
                'category'=>'tech article',
                'description'=>'New project notification'
            ]
        ]);
    }
}
