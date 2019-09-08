<?php

use Illuminate\Database\Seeder;
use App\User;

class CompanySeeder extends Seeder
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
        	"name"=>"dreamjob",
        	"email"=>"dreamjob@gmail.com",
        	"password"=>Hash::make("dreamjob"),
        	'role'=>'company',
        	'company_id'=>3
        ]);
    }
}
