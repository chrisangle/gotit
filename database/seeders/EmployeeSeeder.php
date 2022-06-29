<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete();

        $date = date('Y-m-d H:i:s');
        $data = [
            [
                'phone' => '0915111111',
                'store_id' => 1,
                'point' => 8,
                'lottery_code' => null,
                'is_lucky' => false,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'phone' => '0915111112',
                'store_id' => 2,
                'point' => 5,
                'lottery_code' => '123',
                'is_lucky' => true,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'phone' => '0915111113',
                'store_id' => 3,
                'point' => 4,
                'lottery_code' => '124',
                'is_lucky' => false,
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ];
        DB::table('employees')->insert($data);
    }
}
