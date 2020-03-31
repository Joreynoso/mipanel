<?php

use Illuminate\Database\Seeder;
use App\Nota;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class Inicializar extends Seeder
{
    public function run(){

        factory(Nota::class, 8)->create();

        factory(User::class, 12)->create();

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'notas lista',
        'notas crear',
        'notas editar',
        'notas borrar'
        ];

        foreach ($permissions as $permission) {
          Permission::create(['name' => $permission]);
        }

        $user = User::create([
        	'name' => 'Jose Reynoso', 
        	'email' => 'jose@gmail.com',
        	'password' => bcrypt('123456')
        ]);
  
        $role = Role::create(['name' => 'Super Admin']);
   
        $permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
