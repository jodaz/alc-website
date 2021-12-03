<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'avatar' => 'default/user.png',
            'password' => bcrypt(config('installation.admin_password')),
            'email' => config('installation.admin_email'),
            'remember_token' => Str::random(10),
            'status' => 'ACTIVO'
        ]);

        $superAdmin = Role::whereName('super-admin')->first();
        $admin->syncRoles(Role::find(3));
        $admin->syncRoles($superAdmin);
    }
}
