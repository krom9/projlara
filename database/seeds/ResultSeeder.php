<?php

use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
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
            factory(App\Models\Test\Result::class)->create([
                'test_id' => $test->id,
            ]);
        }
    }
}
