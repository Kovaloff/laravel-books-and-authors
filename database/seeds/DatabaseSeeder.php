<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name' => 'testauthor #1',
            'email' => 'test1@gmail.com',
            'password' => 'test2017',
        ], [
            'name' => 'testauthor #2',
            'email' => 'test2@gmail.com',
            'password' => 'test2017',
        ]);
    }
}
