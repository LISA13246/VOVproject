<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('military_ranks')->insert([
            'name_of_the_award' => 'Орден "Отечественной войны 2 степени"',
            'description' =>'Орденом Отечественной войны 2 степени награждаются.
            Кто мужественно выполнял свои обязанности в экипаже самолета при выполнении боевого задания, за которое штурман или летчик награждены орденом Красного Знамени;
             Кто сбил в воздушном бою, входя в состав экипажа: тяжело-бомбардировочной авиации — 3 самолета; дальне-бомбардировочной авиации — 4 самолета; ближне-бомбардировочной авиации — 6 самолетов; штурмовой авиации — 2 самолета; истребительной авиации — 2 самолета.',
            'photo' =>'imagesAwards/Order of the Patriotic War of the 1st-2nd degree'
        ]);
        DB::table('military_ranks')->insert([
            'name_of_the_award' => 'Медаль "За боевые заслуги"',
            'description' =>'Медалью «За боевые заслуги» награждались: военнослужащие Советской Армии, Военно-Морского Флота, пограничных и внутренних войск другие граждане СССР,а также лица, не являющиеся гражданами СССР.',
            'photo' =>'imagesAwards/Medal for Military Merit.jpg'
        ]);
        DB::table('military_ranks')->insert([
            'name_of_the_award' => 'Медаль "За победу над Германией"',
            'description' =>'Самая распространенная боевая медаль в СССР, эта медаль создана в честь великой победы советских людей в Великой Отечественной войне.',
            'photo' =>'imagesAwards/Medal For the victory over Germany.jpg'
        ]);
    }
}
