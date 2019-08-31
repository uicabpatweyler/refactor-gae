<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Silber\Bouncer\Database\Role;

class RoleApp extends Role
{
    public function scopeGetRoles($query){
      if(Auth::user()->isSuperAdmin())
      {
        return $query;
      }
      return $query->where('name','<>','superadmin');
    }


}
