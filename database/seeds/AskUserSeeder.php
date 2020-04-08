<?php

use Illuminate\Database\Seeder;

class AskUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asks = App\Models\Test\Ask::all();
        $users = App\Models\User\User::all();
        $len = count($asks) ? count($asks) >= count($users) : count($users);
        for($i = 0; $i < $len; $i++)
        {
            factory(App\Models\User\AskUser::class, 10)->create([
                'ask_id' => array_rand($asks->pluck('id')->toArray()),
                'user_id' => array_rand($users->pluck('id')->toArray()),
            ]);
        }
    }
}
