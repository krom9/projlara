<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Models\User\User::all() as $user) {
            factory(App\Models\Test\Test::class, 2)->create([
                'author_id' => $user->id
            ]);
        }

    }
}
