<?php

use Illuminate\Database\Seeder;

class AskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (App\Models\Test\Answer::all() as $answer)
        {
            factory(App\Models\Test\Ask::class, 4)->create([
                'answer_id' => $answer->id,
            ]);
        }
    }
}
