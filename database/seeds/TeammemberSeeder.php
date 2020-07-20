<?php

use Illuminate\Database\Seeder;

class TeammemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams_members')->insert([
            'name' =>"Kyaw Kyaw",
            'team_id'=>1,
          
        ]); 

        DB::table('teams_members')->insert([
            'name' =>"Su Su",
            'team_id'=>1,
          
        ]); 


        DB::table('teams_members')->insert([
            'name' =>"Aung Aung",
            'team_id'=>2,
          
        ]); 
        DB::table('teams_members')->insert([
            'name' =>"Aye Aye",
            'team_id'=>3,
          
        ]); 
    }
}
