<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);

        $user = User::create([
            'name' => "Administrador",
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->assignRole('Admin');
    }
}
