<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Tag::truncate();
       // Tag::class chama App\Tag
       factory('App\Tag',10)->create();
    }
}
