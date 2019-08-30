<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'El SuperAdministrador',
        'email' => 'superadmin@gmail.com',
        'password' => bcrypt('password'),
      ]);
      DB::table('users')->insert([
        'name' => 'El Administrador',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
      ]);
      DB::table('users')->insert([
        'name' => 'El Director',
        'email' => 'director@gmail.com',
        'password' => bcrypt('password'),
      ]);
      DB::table('users')->insert([
        'name' => 'Caja',
        'email' => 'caja@gmail.com',
        'password' => bcrypt('password'),
      ]);

      /*
       * Si pasamos el modelo en cuestion las directivas can y authorize dependeran del modelo
       * eso nos ata a un modelo especifico, lo que es grave si en algun momento deseo cambiar el nombre del modelo
       *
       */

    }
}
