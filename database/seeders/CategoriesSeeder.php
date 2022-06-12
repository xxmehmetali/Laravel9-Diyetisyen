<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
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

        DB::table('categories')->insert(
            [
                [
                    'id'=>2,
                    'parentId'=>null,
                    'title'=>'Obezite',
                    'keywords'=>'ıb',
                    'description'=>'<p>obezite</p>',
                    'image'=>'images/BoMki4NyDRSv2svmVLcd6Z6eRoxu6PejHNYGb27e.png',
                    'status'=>'Staged',
                    'created_at'=>$createdAt,
                    'updated_at'=>$updatedAt
                ],
                [
                    'id'=>3,
                    'parentId'=>null,
                    'title'=>'Yetersiz Beslenme',
                    'keywords'=>'asd',
                    'description'=>'<p>asd</p>',
                    'image'=>'images/5fHQMIn8tjbbCIccs8VvmNDprK9vHevwPPg9R2fP.png',
                    'status'=>'Staged',
                    'created_at'=>$createdAt,
                    'updated_at'=>$updatedAt
                ],
                [
                    'id'=>1,
                    'parentId'=>2,
                    'title'=>'jkl',
                    'keywords'=>'jlk',
                    'description'=>'<p>jl</p>',
                    'image'=>'images/wVAcLdoervg7JYEoGY0NfBiXzCee3YMDfaQ6wPG9.jpg',
                    'status'=>'Online',
                    'created_at'=>$createdAt,
                    'updated_at'=>$updatedAt
                ],
               [
                'id'=>4,
                'parentId'=>3,
                'title'=>'Yetersiz Beslenme tip 1',
                'keywords'=>'asd',
                'description'=>'<p>asd</p>',
                'image'=>'images/kzrxnLUqRqCNzqbONzRm7rnQfdwekg2t5qpo9v4r.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>5,
                'parentId'=>1,
                'title'=>'jkl alt',
                'keywords'=>'asd',
                'description'=>'<p>asd</p>',
                'image'=>'images/rG2zUn0zBi1VDOs75Zz710fWrAixljQ2eMjaeAdQ.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>6,
                'parentId'=>1,
                'title'=>'jkl alt 2',
                'keywords'=>'asd',
                'description'=>'<p>asd</p>',
                'image'=>'images/kmV1Bfcv8eWxVlGz0WYmzAoK6djTcGDvDFKidKYK.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>7,
                'parentId'=>1,
                'title'=>'jkl alt x',
                'keywords'=>'sd',
                'description'=>'<p>asd</p>',
                'image'=>'images/ry5iz9Stn6RgQCyIa399jJpycz51xNC8S3ObxLKm.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>8,
                'parentId'=>2,
                'title'=>'yeni ob',
                'keywords'=>'asd',
                'description'=>'<p>asd</p>',
                'image'=>'images/3VIxwskRbn5VKf4f925P3SoJCTfwClvqSiHPUkiM.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>9,
                'parentId'=>2,
                'title'=>'from',
                'keywords'=>'sad',
                'description'=>'<p>s</p>',
                'image'=>'images/ddC3yRzuPwu24mi6ZT6cDU3xxmg5Juw9afCcMLJp.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>10,
                'parentId'=>3,
                'title'=>'yetersiz beslenme 1',
                'keywords'=>'asd',
                'description'=>'<p>asd</p>',
                'image'=>'images/1CBDZkRJInMIrl4OluDo54s9N7RJWQUqzVa2SMAE.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ],[
                'id'=>11,
                'parentId'=>2,
                'title'=>'tyb2',
                'keywords'=>'l',
                'description'=>'<p>şo</p>',
                'image'=>'images/Eah1gJ3YurN5e2kJueLHGKRqaMp9ZFkkKUHEl41R.png',
                'status'=>'Staged',
                'created_at'=>$createdAt,
                'updated_at'=>$updatedAt
            ]


            ]
        );

    }
}

