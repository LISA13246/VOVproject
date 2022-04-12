<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VeteranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants_of_the_wars')->insert([
            'surname' => "Баранов",
            'name' => "Иван",
            'patronymic' => "Яковлевич",
            'date_of_birth' => '1901',
            'date_of_death'  => '02.02.1943',
            'place_of_appeal' => 'Свердловская обл., Апаевский р-н',
            'id_ranks' => '5',
            'place_of_service' => 'Красная армия',
            'place_of_birth' => 'г.Тамбов',
            'photo' => 'images/Baranov_2_0.jpg',
            'biography' => 'Родился 1901 г., г.Тамбов. Образование 3 класса. 1918-1925 г. - служба в Красной армии - 7 лет. После ВОВ работал на заводе г. Тамбов. В 1950 г. переехал в Абакан, работал в археологической экспедиции - рабочим.'
        ]);
        DB::table('participants_of_the_wars')->insert([
            'surname' => "Клименко",
            'name' => "Степан",
            'patronymic' => "Яковлевич",
            'date_of_birth' => '13.03.1926',
            'date_of_death'  => 'нет данных',
            'place_of_appeal' => 'Казахская ССР, Восточно-Казахская обл., Шемонахинский р-н',
            'id_ranks' => '4',
            'place_of_service' => '549 сп 127 сд 21 ск',
            'place_of_birth' => 'деревня Смирновка, Минусинского р-на',
            'photo' => 'images/Klimenko_2_0.jpg',
            'biography' => 'Родисля 13.03.1926 г. Призван в Советскую Армию в 1944г. В боевых действиях участвовал в составе 2-го Украинского фронта под Будапештом. После демобилизации работал на Украине, на цилине, на трассе "Абакан-Тайшет". С 1965 -1986 г.'
        ]);
    }
}
