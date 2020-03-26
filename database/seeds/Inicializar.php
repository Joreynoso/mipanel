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

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
         ];
    
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }

        $user = User::create([
        	'name' => 'Jose Reynoso', 
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456')
        ]);
  
        $role = Role::create(['name' => 'administrador']);


        // //Permission list
        // Permission::create(['name' => 'products.index']);
        // Permission::create(['name' => 'products.edit']);
        // Permission::create(['name' => 'products.show']);
        // Permission::create(['name' => 'products.create']);
        // Permission::create(['name' => 'products.destroy']);

        // //Admin
        // $admin = Role::create(['name' => 'Admin']);

        // $admin->givePermissionTo([
        //     'products.index',
        //     'products.edit',
        //     'products.show',
        //     'products.create',
        //     'products.destroy'
        // ]);
        // //$admin->givePermissionTo('products.index');
        // //$admin->givePermissionTo(Permission::all());
       
        // //Guest
        // $guest = Role::create(['name' => 'Guest']);

        // $guest->givePermissionTo([
        //     'products.index',
        //     'products.show'
        // ]);

        // //User Admin
        // $user = User::find(1); //Italo Morales
        // $user->assignRole('Admin');
    }
}
