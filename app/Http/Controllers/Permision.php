<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Permision extends Controller
{
    public function createRoles(){

     /* Permission::create(['name'=>'Apply Leaves']);
        Permission::create(['name'=>'Approve Leaves']); */
        
   /*Role::create(['name'=>'admin']);
     Role::create(['name'=>'employee']);
     Role::create(['name'=>'supervisor']);
     Role::create(['name'=>'director']); */

      /* $user = User::find('1');
         $user->assignRole('admin');

         $user = User::find('8');
         $user->assignRole('employee'); 

         $user = User::find('6');
         $user->assignRole('supervisor');

         $user = User::find('7');
         $user->assignRole('director'); 

         $user = User::find('9');
         $user->assignRole('admin');
         */
    }
    
}
