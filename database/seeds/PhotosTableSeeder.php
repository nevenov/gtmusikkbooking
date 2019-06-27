<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->delete();

        $photos = array(
            array('id' => '1','file' => '1559660326Koala.jpg','created_at' => '2019-06-04 14:58:46','updated_at' => '2019-06-04 14:58:46'),
            array('id' => '4','file' => '1559746541image4.jpg','created_at' => '2019-06-05 09:57:22','updated_at' => '2019-06-05 14:55:41'),
            array('id' => '31','file' => '1561120584taffelmusikere1.jpg','created_at' => '2019-06-17 12:01:26','updated_at' => '2019-06-21 14:36:24'),
            array('id' => '26','file' => '1561119152piano-bar-musikker.jpg','created_at' => '2019-06-10 07:44:12','updated_at' => '2019-06-21 14:12:32'),
            array('id' => '23','file' => '1560150656weddings-musicians.jpg','created_at' => '2019-06-10 07:10:56','updated_at' => '2019-06-10 07:10:56'),
            array('id' => '24','file' => '1560151083dancearrangementer2.jpg','created_at' => '2019-06-10 07:18:03','updated_at' => '2019-06-10 07:18:03'),
            array('id' => '25','file' => '1560152455restaurantmusikere.jpg','created_at' => '2019-06-10 07:40:55','updated_at' => '2019-06-10 07:40:55'),
            array('id' => '30','file' => '1561634739Miro-Trobadur.jpg','created_at' => '2019-06-10 14:45:19','updated_at' => '2019-06-27 13:25:39'),
            array('id' => '32','file' => '1560765735piano-bar.jpg','created_at' => '2019-06-17 12:02:15','updated_at' => '2019-06-17 12:02:15'),
            array('id' => '33','file' => '1560766134country-musicians.jpg','created_at' => '2019-06-17 12:03:12','updated_at' => '2019-06-17 12:08:54'),
            array('id' => '34','file' => '1560765836pop-rock.jpg','created_at' => '2019-06-17 12:03:56','updated_at' => '2019-06-17 12:03:56'),
            array('id' => '35','file' => '1560765873jazz.jpg','created_at' => '2019-06-17 12:04:33','updated_at' => '2019-06-17 12:04:33'),
            array('id' => '36','file' => '1560765907klassical-music.jpg','created_at' => '2019-06-17 12:05:07','updated_at' => '2019-06-17 12:05:07'),
            array('id' => '37','file' => '1561635286Karaoke-DJ-resized.jpg','created_at' => '2019-06-17 12:06:49','updated_at' => '2019-06-27 13:34:46'),
            array('id' => '38','file' => '1561120559Barneunderholdning.jpg','created_at' => '2019-06-17 12:07:10','updated_at' => '2019-06-21 14:35:59'),
            array('id' => '39','file' => '1561635370Alle-type.jpg','created_at' => '2019-06-17 12:08:06','updated_at' => '2019-06-27 13:36:10'),
            array('id' => '40','file' => '1561627225Selebrations Duo.jpg','created_at' => '2019-06-20 11:22:26','updated_at' => '2019-06-27 11:20:25'),
            array('id' => '43','file' => '1561616494Loid Jazz Band.jpeg','created_at' => '2019-06-27 08:21:34','updated_at' => '2019-06-27 08:21:34'),
            array('id' => '44','file' => '1561617296Pavlina Ac.Piano 3.jpg','created_at' => '2019-06-27 08:34:56','updated_at' => '2019-06-27 08:34:56'),
            array('id' => '45','file' => '1561617724Filip  Piano Bar 1.jpg','created_at' => '2019-06-27 08:42:04','updated_at' => '2019-06-27 08:42:04'),
            array('id' => '46','file' => '1561628062Ivo-Gee.jpg','created_at' => '2019-06-27 11:34:22','updated_at' => '2019-06-27 11:34:22')
        );


        DB::table('photos')->insert($photos);
    }
}
