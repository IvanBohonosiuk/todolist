<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();
 
        $tasks = array(
            ['id' => 1, 'user_id' => 1, 'task' => 'Task 1', 'status' => 'done', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'user_id' => 1, 'task' => 'Task 2', 'status' => 'done', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'user_id' => 1, 'task' => 'Task 3', 'status' => 'to_do', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'user_id' => 2, 'task' => 'Task 4', 'status' => 'done', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'user_id' => 1, 'task' => 'Task 5', 'status' => 'to_do', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'user_id' => 3, 'task' => 'Task 6', 'status' => 'to_do', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'user_id' => 1, 'task' => 'Task 7', 'status' => 'done', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }
}
