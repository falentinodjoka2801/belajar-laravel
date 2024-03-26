<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

#Models
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    public function run(): void{
        User::create([
            'name'  =>  'Falentino Djoka',
            'email' =>  'falentinodjoka2801@gmail.com',
            'password'  =>  Hash::make('password')            
        ]);
    }
}
