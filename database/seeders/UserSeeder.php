<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ENNACHAT ADNANE',
            'email' => 'adnaneennachat@gmail.com',
            'password' => Hash::make('Adnanecasa2019'),
        ]);
        User::create([
            'name' => 'Step Association',
            'email' => 'step.association2023@gmail.com',
            'password' => Hash::make('Jawad262728'),
        ]);
    }
}



