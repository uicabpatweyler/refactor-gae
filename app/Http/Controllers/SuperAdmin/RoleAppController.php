<?php

namespace App\Http\Controllers\SuperAdmin;

use App\RoleApp;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleAppController extends Controller
{
    public function index(){
      $this->authorize('index-role');
      return view('roles.index',[
        'roles' => RoleApp::getRoles()->get()
      ]);
    }

    public function create(){
      $this->authorize('create', RoleApp::class);
      return 'Roles-create';
    }

    public function show(RoleApp $roleApp){
      $this->authorize('show-role');
      return dd($roleApp);
    }

    public function edit(RoleApp $roleApp){
      $this->authorize('update-role');
      return dd($roleApp);
    }
}
