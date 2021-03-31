<?php

namespace Database\Seeders;

use App\Models\HouseStatus;
use Illuminate\Database\Seeder;

class HouseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new HouseStatus();
        $status->status = 'Còn trống';
        $status->save();

        $status = new HouseStatus();
        $status->status = 'Đã thuê';
        $status->save();

        $status = new HouseStatus();
        $status->status = 'Đang nâng cấp';
        $status->save();
    }
}
