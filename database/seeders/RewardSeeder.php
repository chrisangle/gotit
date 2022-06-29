<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rewards')->delete();

        $date = date('Y-m-d H:i:s');
        $data = [
            [
                'name' => 'Iphone',
                'quantity' => 10,
                'remain' => 0,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Một triệu tiền mặt',
                'quantity' => 30,
                'remain' => 0,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'name' => 'Vé xem phim',
                'quantity' => 60,
                'remain' => 0,
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ];
        DB::table('rewards')->insert($data);
    }
}
