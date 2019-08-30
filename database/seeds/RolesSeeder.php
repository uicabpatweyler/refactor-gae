<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Bouncer::role()->firstOrCreate([
        'name' => 'superadmin',
        'title' => 'Super Administrador',
      ]);

      Bouncer::role()->firstOrCreate([
        'name' => 'admin',
        'title' => 'Administrador',
      ]);

      Bouncer::role()->firstOrCreate([
        'name' => 'director',
        'title' => 'Director'
      ]);

      Bouncer::role()->firstOrCreate([
        'name' => 'caja',
        'title' => 'Caja'
      ]);
    }
}
