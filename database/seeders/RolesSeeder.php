<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RolesSeeder extends Seeder
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

        DB::table('roles')->insert(
            [
                [
                    'id'=>1,
                    'name'=>'admin',
                    'created_at'=>$createdAt,
                    'updated_at'=>$updatedAt
                ],[
                'id'=>2,
                'name'=>'doctor',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>3,
                'name'=>'manager',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ]
            ]
        );
    }
}

