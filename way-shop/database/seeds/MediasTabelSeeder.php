<?php

use Illuminate\Database\Seeder;

class MediasTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medias = [
            [
                'name' => 'Ababkajsfa',
                'alt' => 'sacasc',
                'alt' => 'https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png',
            ],
        ];
        DB::table('medias')->insert($medias);
    }
}
