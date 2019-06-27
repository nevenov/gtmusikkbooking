<?php

use Illuminate\Database\Seeder;

class AudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('audio')->delete();

        $audio = array(
            array('id' => '17','file' => '1561644879audio-monsterslap.mp3','created_at' => '2019-06-27 16:14:39','updated_at' => '2019-06-27 16:14:39'),
            array('id' => '13','file' => '1561644834Audio.mp3','created_at' => '2019-06-27 16:13:54','updated_at' => '2019-06-27 16:13:54'),
            array('id' => '14','file' => '1561644847audio_MP3_1MG.mp3','created_at' => '2019-06-27 16:14:07','updated_at' => '2019-06-27 16:14:07'),
            array('id' => '15','file' => '1561644861Audio7.mp3','created_at' => '2019-06-27 16:14:21','updated_at' => '2019-06-27 16:14:21'),
            array('id' => '16','file' => '1561644870audio-lyricchords.mp3','created_at' => '2019-06-27 16:14:30','updated_at' => '2019-06-27 16:14:30')
        );



        DB::table('audio')->insert($audio);
    }
}
