<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqsSeeder extends Seeder
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

        DB::table('faqs')->insert(
            [
                [
                    'id'=>1,
                    'question'=>'asd',
                    'answer'=>'asd',
                    'status'=>'Staged',
                    'created_at'=>$createdAt,
                    'updated_at'=>$updatedAt
                ],[
                'id'=>2,
                'question'=>'12',
                'answer'=>'2231321',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>3,
                'question'=>'Nede n kayıt omalıym',
                'answer'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>4,
                'question'=>'örnek örnekörnek örnek',
                'answer'=>'örnek örnekörnek örnek cevapörnek örnekörnek örnek cevap',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ]



            ]
        );
    }
}

