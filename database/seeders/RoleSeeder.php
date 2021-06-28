<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $customerRole = Role::firstOrCreate(['name' => 'Customer']);

        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Roles.*']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Roles.create']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Roles.edit']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Roles.view']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Roles.delete']);

        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Customers.*']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Customers.create']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Customers.edit']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Customers.view']);
        $permissionsAdmin[] = Permission::firstOrCreate(['name' => 'Customers.delete']);

        $permissionsCustomer[] = Permission::firstOrCreate(['name' => 'Customers.*']);
        $permissionsCustomer[] = Permission::firstOrCreate(['name' => 'Customers.create']);
        $permissionsCustomer[] = Permission::firstOrCreate(['name' => 'Customers.edit']);
        $permissionsCustomer[] = Permission::firstOrCreate(['name' => 'Customers.view']);

        $adminRole->syncPermissions($permissionsAdmin);
        $customerRole->syncPermissions($permissionsCustomer);

        $admin = User::find(1);
        $admin->syncRoles(['Admin']);
        //$admin->assignRole('Admin');
        //$admin->assignRole($adminRole);
        //$admin->syncRoles(['Admin']);
        //$admin->assignRole('admin', 'web'); // explcitly setting the guard

    }
}
