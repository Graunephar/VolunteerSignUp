<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'group' => 'FDF Testkreds',
            'id' => rand(1, 100),
            'created_at_timestamp' => Carbon::now()->format('Y-m-d H:i:s'),
            'timeslots' => '{ "model": "car" }',
            'comments' => 'Blah',
            'phone' => '88888888'
        ]);

    }
}
