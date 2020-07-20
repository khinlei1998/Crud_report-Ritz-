<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'team_name' =>"Web Team",
          
        ]); 

        DB::table('teams')->insert([
            'team_name' =>"Security team",
          
        ]); 


        DB::table('teams')->insert([
            'team_name' =>"Admin Team",
          
        ]); 
    }
}
