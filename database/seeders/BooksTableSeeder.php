<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '桃太郎',
            'writer' => 'tony'
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => '白雪姫',
            'writer' => 'sara'
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'シンデレラ',
            'writer' => 'sara'
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => 'マッチうりの少女',
            'writer' => 'sara'
        ];
        DB::table('books')->insert($param);
        $param = [
            'title' => '３匹の子ぶた',
            'writer' => 'sara'
        ];
        DB::table('books')->insert($param);
    }
}