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
            'key' => 'site.title',
            'value' => 'Medical group Yurta'
        ]);

        DB::table('settings')->insert([
            'key' => 'site.name',
            'value' => 'Yurta'
        ]);

        DB::table('settings')->insert([
            'key' => 'site.footer',
            'value' => 'Copyright'
        ]);

        DB::table('settings')->insert([
            'key' => 'site.meta.desc',
            'value' => 'Описание'
        ]);

        DB::table('settings')->insert([
            'key' => 'site.meta.key',
            'value' => 'Ключевые слова'
        ]);

        DB::table('settings')->insert([
            'key' => 'site.meta.author',
            'value' => 'Автор'
        ]);
    }
}
