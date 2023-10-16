<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
            DB::table('posts')->insert([
                    'user_id' =>'1',
                    'category_id' =>'1',
                    'shop_name' =>'ジャスコ',
                    'prefecture' =>'神奈川県',
                    'city' =>'横浜市',
                    'after_address' =>'神奈川区',
                    'zip_code' =>'220-8623',
                    'phone_number' =>'000-0000-000',
                    'opening_hours' =>'10時',
                    'distance' =>'500メートル',
                    'required_time' =>'自転車で2分',
                    'body' =>'大学から近い',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
            ]);
    }
}
