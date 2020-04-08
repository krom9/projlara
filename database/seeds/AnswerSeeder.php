<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Models\Test\Test::all() as $test)
        {
            factory(App\Models\Test\Answer::class, 10)->create([
                'test_id' => $test->id,
            ]);
        }
    }
}
