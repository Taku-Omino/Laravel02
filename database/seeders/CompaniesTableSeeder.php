<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    DB::table('companies')->insert([
        [
            'user_name' => 'Steve Jobs',
            'company_name' => 'Apple'
        ],
        [
            'user_name' => 'Bill Gates',
            'company_name' => 'Microsoft'
        ],
        [
            'user_name' => 'Mark Zuckerberg',
            'company_name' => 'Facebook'
        ],
        [
            'user_name' => 'Jeff Bezos',
            'company_name' => 'Amazon'
        ],
        [
            'user_name' => 'Larry Page',
            'company_name' => 'Google'
        ],
        [
            'user_name' => 'Sergey Brin',
            'company_name' => 'Google'
        ],
        [
            'user_name' => 'Elon Musk',
            'company_name' => 'Tesla'
        ],
        [
            'user_name' => 'Jack Ma',
            'company_name' => 'Alibaba'
        ],
        [
            'user_name' => 'Masayoshi Son',
            'company_name' => 'Softbank'
        ],
        [
            'user_name' => 'Hiroshi Mikitani',
            'company_name' => 'Rakuten'
        ]
    ]);
}

}
