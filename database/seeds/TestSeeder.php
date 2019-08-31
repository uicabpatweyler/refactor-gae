<?php

use App\School;
use App\User;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $superAdmin = User::where('email','superadmin@gmail.com')->first();
      $admin = User::where('email','admin@gmail.com')->first();

      Bouncer::role()->firstOrCreate([
        'name' => 'superadmin',
        'title' => 'Super Administrador',
      ]);

      Bouncer::role()->firstOrCreate([
        'name' => 'admin',
        'title' => 'Administrador',
      ]);

      Bouncer::allow('superadmin')->everything();

      Bouncer::assign('superadmin')->to($superAdmin);
      Bouncer::assign('admin')->to($admin);

      Bouncer::allow($admin)->to('create-school');


    }
}
