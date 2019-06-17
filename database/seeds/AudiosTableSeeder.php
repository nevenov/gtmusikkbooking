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
            array('id' => '1','file' => '1560157942audio-monsterslap.mp3','created_at' => '2019-06-10 09:12:22','updated_at' => '2019-06-10 09:12:22'),
            array('id' => '2','file' => '1560158223Audio7.mp3','created_at' => '2019-06-10 09:17:03','updated_at' => '2019-06-10 09:17:03'),
            array('id' => '5','file' => '1560172575audio_MP3_1MG.mp3','created_at' => '2019-06-10 13:16:15','updated_at' => '2019-06-10 13:16:15'),
            array('id' => '4','file' => '1560158406audio-lyricchords.mp3','created_at' => '2019-06-10 09:20:06','updated_at' => '2019-06-10 09:20:06'),
            array('id' => '6','file' => '1560177557Audio7.mp3','created_at' => '2019-06-10 14:39:17','updated_at' => '2019-06-10 14:39:17'),
            array('id' => '7','file' => '1560177919Audio7.mp3','created_at' => '2019-06-10 14:45:19','updated_at' => '2019-06-10 14:45:19'),
            array('id' => '8','file' => '1560428872Audio.mp3','created_at' => '2019-06-13 14:27:52','updated_at' => '2019-06-13 14:27:52'),
            array('id' => '9','file' => '1560614905audio_MP3_1MG.mp3','created_at' => '2019-06-15 18:08:25','updated_at' => '2019-06-15 18:08:25')
        );


        DB::table('audio')->insert($audio);
    }
}
