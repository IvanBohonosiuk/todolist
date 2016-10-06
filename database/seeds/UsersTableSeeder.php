<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'User1', 'email' => 'user1@gmail.com', 'api_token' => bcrypt('tokens1'), 'password' => bcrypt('pass'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'User2', 'email' => 'user2@gmail.com', 'api_token' => bcrypt('tokens2'), 'password' => bcrypt('pass'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'User3', 'email' => 'user3@gmail.com', 'api_token' => bcrypt('tokens3'), 'password' => bcrypt('pass'), 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
