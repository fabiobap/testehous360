<?php

use App\User;
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
        $usersCount = max((int) $this->command->ask('Adicionar quantos users?', 5), 1);
        factory(User::class)->states('fabio')->create();
        factory(User::class, $usersCount)->create();
    }
}
