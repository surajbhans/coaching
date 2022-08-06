<?php

namespace Database\Seeders;
use Illuminate\Database\Console\seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Teacher;

class AdminSeeder extends Seeder
{
   
    public function run()
    {
        Teacher::create([
            'name' => 'suraj',
            'email' => 'trr544@gmail.com',
            'password' => '12345678'
        ]);
    }
}
