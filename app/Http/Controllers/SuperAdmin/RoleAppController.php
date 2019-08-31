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
      if($roleApp->name === 'superadmin' && !Auth::user()->isSuperAdmin())
      {
        abort(403);
      }
      return view('roles.show', [
        'role' => $roleApp
      ]);
    }

    public function edit(RoleApp $roleApp){
      $this->authorize('edit-role');
      if($roleApp->name === 'superadmin' && !Auth::user()->isSuperAdmin())
      {
        abort(403);
      }
      return view('roles.edit', [
        'role' => $roleApp
      ]);
    }

    public function update(RoleApp $roleApp, Request $request){
      $roleApp->title = $request->get('title');
      $roleApp->save();
      return view('roles.show', [
        'role' => $roleApp
      ]);
    }
}
