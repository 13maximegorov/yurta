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
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'сервисы',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'работа',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'трансферы',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'страхование',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'visa',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'лицензия',
            'url' => ''
        ]);
        DB::table('navigation')->insert([
            'title' => 'контакты',
            'url' => ''
        ]);
    }
}
