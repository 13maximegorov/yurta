<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'welcome',
            'type' => 'welcome',
            'position' => 1
        ]);

        DB::table('sections')->insert([
            'name' => 'offer',
            'type' => 'about',
            'position' => 2
        ]);

        DB::table('sections')->insert([
            'name' => 'visa',
            'type' => 'avbout',
            'position' => 3
        ]);

        DB::table('sections')->insert([
            'name' => 'tours',
            'type' => 'slider',
            'position' => 4
        ]);

        DB::table('sections')->insert([
            'name' => 'work',
            'type' => 'slider',
            'position' => 5
        ]);

        DB::table('sections')->insert([
            'name' => 'question',
            'type' => 'about',
            'position' => 6
        ]);
    }
}
