<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserRolePermissioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'username' => fake()->username(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
                $admin = User::create(array_merge([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'username' => 'admincuy',
        ], default_user_value));

        $user = User::create(array_merge([
            'email' => 'user@gmail.com',
            'name' => 'user',
            'username' => 'usercuy',
        ], default_user_value));

        $superAdmin = User::create(array_merge([
            'email' => 'super@gmail.com',
            'name' => 'super',
            'username' => 'supercuy',
        ], default_user_value));

        $role_admin = Role::create(['name' => 'admin']);
        $role_user = Role::create(['name' => 'user']);
        $role_super = Role::create(['name' => 'superAdmin']);

        $permission = Permission::create(['name'=>'read role']);
        $permission = Permission::create(['name'=>'create role']);
        $permission = Permission::create(['name'=>'update role']);
        $permission = Permission::create(['name'=>'delete role']);

        $admin ->assignRole('admin');
        $user ->assignRole('user');
        $superAdmin ->assignRole('superAdmin');
        DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        
    }
}
