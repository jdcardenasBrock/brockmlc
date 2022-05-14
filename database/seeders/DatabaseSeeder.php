<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'crear_referencia']);
        Permission::create(['name' => 'editar_referencia']);
        Permission::create(['name' => 'asignar_referencia']);
        Permission::create(['name' => 'eliminar_referencia']);

        Permission::create(['name' => 'crear_usuarios']);
        Permission::create(['name' => 'editar_usuarios']);
        Permission::create(['name' => 'eliminar_usuarios']);


        Permission::create(['name' => 'crear_permisos']);
        Permission::create(['name' => 'editar_permisos']);
        Permission::create(['name' => 'eliminar_permisos']);

        Permission::create(['name' => 'crear_roles']);
        Permission::create(['name' => 'editar_roles']);
        Permission::create(['name' => 'eliminar_roles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role_super_admin = Role::create(['name' => 'SuperAdmin']);
        $role_super_admin->givePermissionTo(Permission::all());

        $role_admin = Role::create(['name' => 'administrador']);
        $role_admin->givePermissionTo(['crear_referencia', 'editar_referencia', 'asignar_referencia', 'eliminar_referencia', 'crear_usuarios', 'editar_usuarios', 'eliminar_usuarios', 'crear_roles', 'editar_roles', 'eliminar_roles']);

        $user_superAdmin = \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@root.com',
            'password' => bcrypt('A.123456')
        ]);
        $user_superAdmin->assignRole($role_super_admin);

        $user_admin = \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@refers.com',
            'password' => bcrypt('A.123456')
        ]);
        $user_admin->assignRole($role_admin);
    }
}
