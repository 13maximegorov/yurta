<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'title' => 'Card 1',
            'url' => 'card-1',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);

        DB::table('cards')->insert([
            'title' => 'Card 2',
            'url' => 'card-2',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);

        DB::table('cards')->insert([
            'title' => 'Card 3',
            'url' => 'card-3',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);

        DB::table('cards')->insert([
            'title' => 'Card 4',
            'url' => 'card-4',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);

        DB::table('cards')->insert([
            'title' => 'Card 5',
            'url' => 'card-5',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);

        DB::table('cards')->insert([
            'title' => 'Card 6',
            'url' => 'card-6',
            'text' => 'card',
            'img' => 'no-photo.png'
        ]);
    }
}
