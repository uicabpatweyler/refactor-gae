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
      $this->call(UsersSeeder::class);
      $this->call(RolesSeeder::class);
      $this->call(AssignRoleUserSeeder::class);
      $this->call(AbilitiesSeeder::class);
      $this->call(AsingAbilitieToUserSeeder::class);
    }
}
