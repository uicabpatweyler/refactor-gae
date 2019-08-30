<?php

use Illuminate\Database\Seeder;

class AbilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Bouncer::forbid('banned')->everything();

      Bouncer::ability()->firstOrCreate([
        'name' => '*',
        'title' => 'Todas las habilidades para el superadministrador',
        'entity_type' => '*'
      ]);

      Bouncer::ability()->firstOrCreate([
        'name' => 'index-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'create-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'store-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'show-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'edit-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'update-role'
      ]);
      Bouncer::ability()->firstOrCreate([
        'name' => 'destroy-role'
      ]);
    }
}
