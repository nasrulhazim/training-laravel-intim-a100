<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// truncate table
    	User::truncate();
        Profile::truncate();

    	// insert 10 records for table users
        // factory(User::class, 10)->create();
        
        factory(App\User::class, 10)->create()->each(function($u){
            $u->profile()->save(factory(App\Profile::class)->make());
        });
    }
}
