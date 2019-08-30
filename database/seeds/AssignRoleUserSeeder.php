<?php

use App\School;
use Illuminate\Database\Seeder;
use App\User;

class AssignRoleUserSeeder extends Seeder
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
      $director = User::where('email','director@gmail.com')->first();
      $caja = User::where('email','caja@gmail.com')->first();

      Bouncer::assign('superadmin')->to($superAdmin);
      Bouncer::assign('admin')->to($admin);
      Bouncer::assign('director')->to($director);
      Bouncer::assign('caja')->to($caja);
    }
}
