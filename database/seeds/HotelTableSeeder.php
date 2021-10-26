<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "taro",
            "address" => "テスト県テスト市テスト区1-2",
            "tel" => "000-0000-0000",
        ];
        DB::table("user")->insert($param);

        $param = [
            "name" => "hanako",
            "address" => "テスト県テスト市テスト区3-4",
            "tel" => "010-0000-0000",
        ];
        DB::table("user")->insert($param);

        $param = [
            "name" => "taro",
            "address" => "テスト県テスト市テスト区5-6",
            "tel" => "020-0000-0000",
        ];
        DB::table("user")->insert($param);

    }
}
