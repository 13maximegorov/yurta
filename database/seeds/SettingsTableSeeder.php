<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site.title' => 'Medical group Yurta',
            'side.name' => 'Yurta',
            'site.footer' => 'Copyright',
            'site.meta.desc' => 'Описание',
            'site.meta.key' => 'Ключевые слова',
            'site.meta.author' => 'Автор'
        ]);
    }
}
