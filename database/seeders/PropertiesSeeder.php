<?php

namespace Database\Seeders;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingId = Setting::where('settingName', 'property')->get()[0]->id;
        $createdAt = Carbon::now()->toDateTimeString();
        $updatedAt = Carbon::now()->toDateTimeString();

        DB::table('properties')->insert(
            [
                [
                    'key' => 'siteName',
                    'value' => 'Süper Diyet',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'openingHoursText',
                    'value' => 'Açılış Saatleri',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'openingHoursHours',
                    'value' => 'Pzt - Cuma, 8:00 - 9:00',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'callUsPhoneNumber',
                    'value' => '+800-512-512',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'callUsText',
                    'value' => 'Bizi Arayın',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'contactViaEmailText',
                    'value' => 'Email\'le ulaşın',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'contactViaEmail',
                    'value' => 'diyet@superdiyet.com',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'menuText',
                    'value' => 'Menü',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'homepageText',
                    'value' => 'Anasayfa',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'aboutUsText',
                    'value' => 'Hakkımızda',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'servicesText',
                    'value' => 'Servisler',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'pricesText',
                    'value' => 'Ücretler',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'ourBranchesText',
                    'value' => 'Şubelerimiz',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'contactUsText',
                    'value' => 'Bize Ulaşın',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ],
                [
                    'key' => 'takeAppointmentText',
                    'value' => 'Randevu Al',
                    'settingId' => $settingId,
                    'status' => 'Online',
                    'created_at' => $createdAt,
                    'updated_at' => $updatedAt
                ]
            ]
        );
    }
}

