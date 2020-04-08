<?php

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tests = App\Models\Test\Test::all();
        $users = App\Models\User\User::all();
        $len = count($tests) ? count($tests) >= count($users) : count($users);
        for($i = 0; $i < $len; $i++)
        {
            factory(App\Models\User\TestUser::class, 3)->create([
                'test_id' => array_rand($tests->pluck('id')->toArray()),
                'user_id' => array_rand($users->pluck('id')->toArray()),
            ]);
        }
    }
}
