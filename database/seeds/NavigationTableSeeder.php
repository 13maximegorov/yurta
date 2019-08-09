<?php

use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigation')->insert([
            'title' => 'о нас',
            'url' => 'about',
            'position' => 1
        ]);
        DB::table('navigation')->insert([
            'title' => 'Услуги',
            'url' => 'services',
            'position' => 2
        ]);
        DB::table('navigation')->insert([
            'title' => 'работа',
            'url' => 'work',
            'position' => 3
        ]);
        DB::table('navigation')->insert([
            'title' => 'трансферы',
            'url' => 'transfers',
            'position' => 4
        ]);
        DB::table('navigation')->insert([
            'title' => 'visa',
            'url' => 'visa',
            'position' => 5
        ]);
        DB::table('navigation')->insert([
            'title' => 'лицензия',
            'url' => 'license',
            'position' => 6
        ]);
        DB::table('navigation')->insert([
            'title' => 'контакты',
            'url' => 'contacts',
            'position' => 7
        ]);
    }
}
