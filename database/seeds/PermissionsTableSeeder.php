<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Users
        Permission::Create([
          'name'=>'navegar usuarios',
          'slug'=>'users.index',
          'description'=>'lista y navega todos los usuarios del sistema'
        ]);
        Permission::Create([
          'name'=>'ver usuarios',
          'slug'=>'users.show',
          'description'=>'ver en detalle cada  usuario del sistema'
        ]);
        Permission::Create([
          'name'=>'navegar usuarios',
          'slug'=>'users.edit',
          'description'=>'editar cualquier dato de un usuario del sistema'
        ]);
        Permission::Create([
          'name'=>'navegar usuarios',
          'slug'=>'users.destroy',
          'description'=>'eliminar cualquier  usuario del sistema'
        ]);

        //Roles
        Permission::Create([
          'name'=>'navegar roles',
          'slug'=>'roles.index',
          'description'=>'lista y navega todos los roles del sistema'
        ]);
        Permission::Create([
          'name'=>'ver roles',
          'slug'=>'roles.show',
          'description'=>'ver en detalle cada  rol del sistema'
        ]);
        Permission::Create([
          'name'=>'creacion de  roles',
          'slug'=>'roles.create',
          'description'=>'editar cualquier dato de un rol del sistema'
        ]);
        Permission::Create([
          'name'=>'Edicion de  roles',
          'slug'=>'roles.edit',
          'description'=>'editar cualquier dato de un rol del sistema'
        ]);
        Permission::Create([
          'name'=>'navegar roles',
          'slug'=>'roles.destroy',
          'description'=>'eliminar cualquier  rol del sistema'
        ]);


          //productos
        Permission::Create([
          'name'=>'navegar productos',
          'slug'=>'productos.index',
          'description'=>'lista y navega todos los productos del sistema'
        ]);
        Permission::Create([
          'name'=>'ver productos',
          'slug'=>'productos.show',
          'description'=>'ver en detalle cada  producto del sistema'
        ]);
        Permission::Create([
          'name'=>'creacion de  productos',
          'slug'=>'productos.create',
          'description'=>'crear cualquier  un producto en el  sistema'
        ]);
        Permission::Create([
          'name'=>'Edicion de  productos',
          'slug'=>'productos.edit',
          'description'=>'editar cualquier dato de un producto del sistema'
        ]);
        Permission::Create([
          'name'=>'eliminar producto',
          'slug'=>'productos.destroy',
          'description'=>'eliminar cualquier  producto del sistema'
        ]);
    }
}
