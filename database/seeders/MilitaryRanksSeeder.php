<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MilitaryRanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('military_ranks')->insert([
            'ranks' => "Старший сержант"
        ]);
        DB::table('military_ranks')->insert([
            'ranks' => "Красноармеец"
        ]);
        DB::table('military_ranks')->insert([
            'ranks' => "Рядовой"
        ]);
        DB::table('military_ranks')->insert([
            'ranks' => "Лейтенант"
        ]);
        DB::table('military_ranks')->insert([
            'ranks' => "Сержант"
        ]);
    }
}
