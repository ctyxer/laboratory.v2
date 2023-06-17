<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleDefault = Role::factory()->create([
            'name' => 'Обычный'
        ]);

        $roleAdmin = Role::factory()->create([
            'name' => 'Администратор'
        ]);

        $admin = User::factory()->create([
            'full_name' => 'Суровцева Наталья Юрьевна',
            'login' => 'kapystochka',
            'email' => 'mail@mail.com',
            'password' => Hash::make('admin'),
            'role_id' => $roleAdmin->id
        ]);
    }
}