<?php

use Illuminate\Database\Seeder;
// 追加
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diaries = [
            [
                'title' => '初めてのセブ',
                'body' => 'PC日本に忘れた'
            ],
            [
                'title' => '週末のオスロブ',
                'body' => 'ジンベエザメでか'
            ],
            [
                'title' => '卒業',
                'body' => 'パスポート寮に忘れた'
            ]
        ];
        foreach($diaries as $diary) {
            // DBにデータを追加する
            DB::table('diaries')->insert([
                'title' => $diary['title'],
                'body' => $diary['body'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
