<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userDemo = [
            'name'      =>  'Administrator',
            'email'     =>  'admin@demo.com',
            'password'  =>  Hash::make('password')
        ];
        
        \DB::table('users')->insert($userDemo);
    }
}
