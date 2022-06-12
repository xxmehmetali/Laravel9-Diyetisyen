<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = Carbon::now()->toDateTimeString();
        $updatedAt = Carbon::now()->toDateTimeString();

        DB::table('settings')->insert(

                [
                    [
                    'id'=>1,
                    'settingName'=>'property',
                    'status' => 'Online'
                ],[
                    'id'=>2,
                    'settingName'=>'smtp',
                    'status' => 'Online'
                ],[
                    'id'=>3,
                    'settingName'=>'socialMedia',
                    'status' => 'Online'
                ]
            ]

        );
    }
}

