<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
    	// USUARIOS
        Permission::create([
        	'name'			=>	'Ver todos los usuarios',
        	'slug'			=>	'users.index',
        	'description'	=>	'Ver todos los usuarios',
        ]);

        Permission::create([
        	'name'			=>	'Ver un usuario especifico',
        	'slug'			=>	'users.show',
        	'description'	=>	'Ver solo el usuario seleccionado',
        ]);

        Permission::create([
        	'name'			=>	'Editar un usuario',
        	'slug'			=>	'users.edit',
        	'description'	=>	'Ver y editar un usuario',
        ]);

        Permission::create([
        	'name'			=>	'Eliminar un usuario',
        	'slug'			=>	'users.destroy',
        	'description'	=>	'Eliminar usuarios',
        ]);

        // ROLES
        Permission::create([
        	'name'			=>	'Ver todos los roles',
        	'slug'			=>	'roles.index',
        	'description'	=>	'Ver todos los roles',
        ]);

        Permission::create([
        	'name'			=>	'Ver un rol especifico',
        	'slug'			=>	'roles.show',
        	'description'	=>	'Ver solo el rol seleccionado',
        ]);

        Permission::create([
        	'name'			=>	'Editar un rol',
        	'slug'			=>	'roles.edit',
        	'description'	=>	'Ver y editar un rol',
        ]);

        Permission::create([
        	'name'			=>	'Crear un rol',
        	'slug'			=>	'roles.create',
        	'description'	=>	'Crear un rol',
        ]);

        Permission::create([
        	'name'			=>	'Eliminar un rol',
        	'slug'			=>	'roles.destroy',
        	'description'	=>	'Eliminar roles',
        ]);

        // PRODUCTOS
        Permission::create([
        	'name'			=>	'Ver todos los productos',
        	'slug'			=>	'products.index',
        	'description'	=>	'Ver todos los productos',
        ]);

        Permission::create([
        	'name'			=>	'Ver un producto especifico',
        	'slug'			=>	'products.show',
        	'description'	=>	'Ver solo el producto seleccionado',
        ]);

        Permission::create([
        	'name'			=>	'Editar un producto',
        	'slug'			=>	'products.edit',
        	'description'	=>	'Ver y editar un producto',
        ]);

        Permission::create([
        	'name'			=>	'Crear un producto',
        	'slug'			=>	'products.create',
        	'description'	=>	'Ver y editar un producto',
        ]);

        Permission::create([
        	'name'			=>	'Eliminar un producto',
        	'slug'			=>	'products.destroy',
        	'description'	=>	'Eliminar productos',
        ]);

    }
}
