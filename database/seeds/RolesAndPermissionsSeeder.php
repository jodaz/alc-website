<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        // Users
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'edit user profile']);

        //Roles
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);

        //Permissions
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'edit permissions']);
        Permission::create(['name' => 'delete permissions']);

        //Tags
        Permission::create(['name' => 'create labels']);
        Permission::create(['name' => 'edit labels']);

        //Galleries
        Permission::create(['name' => 'create gallery']);
        Permission::create(['name' => 'edit gallery']);
        Permission::create(['name' => 'delete gallery']);

        //Articles
        Permission::create(['name' => 'create article']);
        Permission::create(['name' => 'edit article']);
        Permission::create(['name' => 'publish article']);

        // create roles and assign created permissions
        // this can be done as separate statements
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('create article');

        $role2 = Role::create(['name' => 'super-admin']);
    }
}
