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

        Permission::create(['name' => 'create_user']);
        Permission::create(['name' => 'edit_user']);
        Permission::create(['name' => 'delete_user']);

        Permission::create(['name' => 'view_permissions']);
        Permission::create(['name' => 'create_permissions']);
        Permission::create(['name' => 'edit_permissions']);
        Permission::create(['name' => 'delete_permissions']);

        Permission::create(['name' => 'view_role']);
        Permission::create(['name' => 'create_role']);
        Permission::create(['name' => 'edit_role']);
        Permission::create(['name' => 'delete_role']);

        Permission::create(['name' => 'view_projects']);
        Permission::create(['name' => 'create_projects']);
        Permission::create(['name' => 'edit_projects']);
        Permission::create(['name' => 'delete_projects']);
        

        Permission::create(['name' => 'view_projects_client']);

        Permission::create(['name' => 'view_prohound']);
        Permission::create(['name' => 'view_restoration_premium']);
        Permission::create(['name' => 'view_building_premium']);
        Permission::create(['name' => 'view_sitework_premium']);
        Permission::create(['name' => 'western_zone_clients']);
        Permission::create(['name' => 'eastern_zone_clients']);
        

        // create roles and assign created permissions

        // this can be done as separate statements
        $role_super_admin = Role::create(['name' => 'SuperAdmin']);
        $role_super_admin->givePermissionTo(Permission::all());

        $role_admin = Role::create(['name' => 'Admin']);
        $role_admin->givePermissionTo(['create_user', 'edit_user', 'delete_user', 
        'create_role', 'edit_role', 'delete_role','view_prohound',
        'view_restoration_premium','view_building_premium','view_sitework_premium',
        'western_zone_clients','eastern_zone_clients']);

        $role_client = Role::create(['name' => 'Client']);
        $role_client->givePermissionTo(['view_projects_client']);

        $user_superAdmin = \App\Models\User::factory()->create([
            'name' => 'Juan David Cardenas',
            'email' => 'superadmin',
            'password' => bcrypt('A.123456')
        ]);
        $user_superAdmin->assignRole($role_super_admin);

        $user_admin = \App\Models\User::factory()->create([
            'name' => 'Bo Cheek',
            'email' => 'admin',
            'password' => bcrypt('A.123456')
        ]);
        $user_admin->assignRole($role_admin);

    }
}
