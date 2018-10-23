<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name'	=> 'Admin PTIPD',
            'email'	=> 'admin@uinsgd.ac.id',
            'password'	=> bcrypt('rahasia')
    ]);
    }
}
