<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->ask('Gostaria de dar um refresh na database?', 'yes')) {
            $this->command->call('migrate:refresh');
        }
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
