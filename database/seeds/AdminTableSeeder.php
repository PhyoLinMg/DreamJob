<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	"name"=>"admin",
        	"email"=>"admin@gmail.com",
        	"password"=>Hash::make("admin123"),
        	'role'=>'admin'
        ]);
    }
}
