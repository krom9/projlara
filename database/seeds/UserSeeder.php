<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Models\User\Role::all() as $role)
        {
            factory(App\Models\User\User::class, 1)->create([
                'role_id' => $role->id,
            ]);
        }
        DB::table('users')->insert([
            'name' => '1',
            'role_id' => 1,
            'email' => '12345@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => '2',
            'role_id' => 2,
            'email' => '12346@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 3,
            'email' => '12340@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
