<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u1= new User;

        $u1->name="John";
        $u1->email="John@johny.com";
        $u1->password=Hash::make('password');

        $u1->save();
    }
}
