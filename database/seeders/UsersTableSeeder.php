<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'workplace' => 'Apple'
        ],
        [
            'user_name' => 'Bill Gates',
            'workplace' => 'Microsoft'
        ],
        [
            'user_name' => 'Mark Zuckerberg',
            'workplace' => 'Facebook'
        ],
        [
            'user_name' => 'Jeff Bezos',
            'workplace' => 'Amazon'
        ],
        [
            'user_name' => 'Larry Page',
            'workplace' => 'Google'
        ],
        [
            'user_name' => 'Sergey Brin',
            'workplace' => 'Google'
        ],
        [
            'user_name' => 'Elon Musk',
            'workplace' => 'Tesla'
        ],
        [
            'user_name' => 'Jack Ma',
            'workplace' => 'Alibaba'
        ],
        [
            'user_name' => 'Masayoshi Son',
            'workplace' => 'Softbank'
        ],
        [
            'user_name' => 'Hiroshi Mikitani',
            'workplace' => 'Rakuten'
        ]
    ]);
}

}
