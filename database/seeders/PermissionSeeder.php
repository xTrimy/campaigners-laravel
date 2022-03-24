<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // Articles
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // Website
        Permission::create(['name' => 'edit website']);

        // Members Access
        Permission::create(['name' => 'members access']);
        Permission::create(['name' => 'edit members']);
        Permission::create(['name' => 'delete members']);
        Permission::create(['name' => 'warn members']);
        Permission::create(['name' => 'add members']);
        // Trainees Access
        Permission::create(['name' => 'trainees access']);
        Permission::create(['name' => 'edit trainees']);
        Permission::create(['name' => 'delete trainees']);
        Permission::create(['name' => 'warn trainees']);
        Permission::create(['name' => 'add trainees']);

        // Message Access
        Permission::create(['name' => 'message members']);

        // Managing Access
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'assign tasks']);
        Permission::create(['name' => 'delete tasks']);

        $HR = Role::create(['name' => 'HR']);
        $HR->givePermissionTo('warn members');
        $HR->givePermissionTo('members access');
        
        $Head = Role::create(['name' => 'Head']);
        $Head->givePermissionTo('members access');
        $Head->givePermissionTo('warn members');
        $Head->givePermissionTo('assign tasks');
        $Head->givePermissionTo('delete tasks');

        $CoHead = Role::create(['name' => 'Co-Head']);
        $CoHead->givePermissionTo('members access');
        $CoHead->givePermissionTo('warn members');
        $CoHead->givePermissionTo('assign tasks');
        $CoHead->givePermissionTo('delete tasks');
        
        $SuperAdmin = Role::create(['name' => 'Super-Admin']);

        $Member = Role::create(['name' => 'Member']);
        $Trainer = Role::create(['name' => 'Trainer']);
        $Trainer->givePermissionTo('assign tasks');
        $Trainee = Role::create(['name' => 'Trainee']);

        $President = Role::create(['name' => 'President']);
        $President->givePermissionTo('edit articles');
        $President->givePermissionTo('delete articles');
        $President->givePermissionTo('publish articles');
        $President->givePermissionTo('unpublish articles');
        $President->givePermissionTo('edit website');
        $President->givePermissionTo('members access');

        $President->givePermissionTo('edit members');
        $President->givePermissionTo('delete members');
        $President->givePermissionTo('warn members');
        $President->givePermissionTo('add members');

        $President->givePermissionTo('message members');

        $President->givePermissionTo('manage users');
        $President->givePermissionTo('assign tasks');
        $President->givePermissionTo('delete tasks');

        $Vice = Role::create(['name' => 'Vice President']);
        $Vice->givePermissionTo('edit articles');
        $Vice->givePermissionTo('delete articles');
        $Vice->givePermissionTo('publish articles');
        $Vice->givePermissionTo('unpublish articles');
        $Vice->givePermissionTo('edit website');
        $Vice->givePermissionTo('members access');

        $Vice->givePermissionTo('edit members');
        $Vice->givePermissionTo('delete members');
        $Vice->givePermissionTo('warn members');
        $Vice->givePermissionTo('add members');

        $Vice->givePermissionTo('message members');

        $Vice->givePermissionTo('manage users');
        $Vice->givePermissionTo('assign tasks');
        $Vice->givePermissionTo('delete tasks');
        
        $OCManager = Role::create(['name' => 'OC Manager']);
        $OCManager->givePermissionTo('members access');

        $OCManager->givePermissionTo('edit members');
        $OCManager->givePermissionTo('delete members');
        $OCManager->givePermissionTo('warn members');

        $OCManager->givePermissionTo('message members');



        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($Head);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($Member);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($SuperAdmin);
    }
}
