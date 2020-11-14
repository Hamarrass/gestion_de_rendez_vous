<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert(
            [
                'title'        => 'hassan',
                'start'       => '2019-10-11 21:30:00',
                'end'         => '2019-10-12 21:30:00',
                'color'       => 'red',
                'description' =>'hahahahahaha'
            ],
            [
                'title'        => 'Mohcine',
                'start'       => '2019-10-10 21:30:00',
                'end'         => '2019-10-12 23:30:00',
                'color'       => 'red',
                'description' =>'hahahahahaha'

            ]
        );
    }
}
