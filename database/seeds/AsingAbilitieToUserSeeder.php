<?php

use App\User;
use Illuminate\Database\Seeder;

class AsingAbilitieToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Bouncer::allow('superadmin')->everything();
      //$admin = User::where('email','admin@gmail.com')->first();
      //$director   = User::where('email','director@gmail.com')->first();
      //$caja       = User::where('email','caja@gmail.com')->first();

      Bouncer::allow('admin')->to('index-role');
      Bouncer::allow('admin')->to('show-role');
      Bouncer::allow('admin')->to('edit-role');
      Bouncer::allow('admin')->to('update-role');
      Bouncer::allow('director')->to('index-role');
      Bouncer::allow('director')->to('show-role');
    }
}
