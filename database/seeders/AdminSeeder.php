<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$admin = new Admin();
        //$admin->login("Liza@mail.ru");
        //$admin->password(Hash::make("12345"));
        //$admin->save();

        DB::table('admins')->insert([
            'login' => "Liza@mail.ru",
            'password' => Hash::make("12345"),

        ]);

    }
}
