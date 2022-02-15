<?php

namespace Database\Seeders;

use Faker\Provider\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*deze command wordt gebruikt om seeder uitevoeren
         * php artisan db:seed --class=ArticleSeeder
         * de
         * */
        DB::table('articles')->insert([
           'title'=>Str::random(15),
           'content'=>Str::random(45),
        ]);
    }
}
