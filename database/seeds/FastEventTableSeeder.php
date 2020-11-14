<?php

use Illuminate\Database\Seeder;

class FastEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('fast_events')->insert(
            [
                'title'        => 'hassan',
                'start'       => '21:30:00',
                'end'         => '22:30:00',
                'color'       => 'red'
            ],
            [
                'title'        => 'Mohcine',
                'start'       => '21:30:00',
                'end'         => '23:30:00',
                'color'       => 'green'
            ]
        );
    }
}
