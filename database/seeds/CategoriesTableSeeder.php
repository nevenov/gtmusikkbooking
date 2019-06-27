<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->delete();

        $categories = array(
            array('id' => '7','parent_id' => '0','name' => 'Hotell og Restaurantmusikere','slug' => 'restaurantmusikere','photo_id' => '25','position' => NULL,'created_at' => '2019-06-10 07:40:55','updated_at' => '2019-06-21 11:20:33'),
            array('id' => '5','parent_id' => '0','name' => 'Bryllup','slug' => 'bryllup','photo_id' => '23','position' => NULL,'created_at' => '2019-06-10 07:10:33','updated_at' => '2019-06-12 13:52:14'),
            array('id' => '6','parent_id' => '0','name' => 'Dansearrangementer','slug' => 'dancearrangementer','photo_id' => '24','position' => NULL,'created_at' => '2019-06-10 07:18:03','updated_at' => '2019-06-21 11:27:58'),
            array('id' => '8','parent_id' => '0','name' => 'Pianobarentertainere','slug' => 'troubadoures','photo_id' => '26','position' => NULL,'created_at' => '2019-06-10 07:44:12','updated_at' => '2019-06-21 11:26:43'),
            array('id' => '9','parent_id' => '0','name' => 'Taffelmusikere','slug' => 'pianobar','photo_id' => '31','position' => NULL,'created_at' => '2019-06-17 12:01:26','updated_at' => '2019-06-21 11:30:14'),
            array('id' => '10','parent_id' => '0','name' => 'Pubmusikere','slug' => 'lobby-pianist','photo_id' => '32','position' => NULL,'created_at' => '2019-06-17 12:01:58','updated_at' => '2019-06-21 11:30:37'),
            array('id' => '11','parent_id' => '0','name' => 'Countrymusikere','slug' => 'countrymusikere','photo_id' => '33','position' => NULL,'created_at' => '2019-06-17 12:03:12','updated_at' => '2019-06-17 12:03:12'),
            array('id' => '12','parent_id' => '0','name' => 'Pop-Rock musikere','slug' => 'pop-rock-musikere','photo_id' => '34','position' => NULL,'created_at' => '2019-06-17 12:03:56','updated_at' => '2019-06-21 11:31:23'),
            array('id' => '13','parent_id' => '0','name' => 'Jazzmusikere','slug' => 'jazzmusikere','photo_id' => '35','position' => NULL,'created_at' => '2019-06-17 12:04:33','updated_at' => '2019-06-17 12:04:33'),
            array('id' => '14','parent_id' => '0','name' => 'Klassisk Musik','slug' => 'klassisk-musikk','photo_id' => '36','position' => NULL,'created_at' => '2019-06-17 12:05:07','updated_at' => '2019-06-21 11:31:58'),
            array('id' => '15','parent_id' => '0','name' => 'DJ / Karaoke','slug' => 'barneunderholdning','photo_id' => '37','position' => NULL,'created_at' => '2019-06-17 12:06:49','updated_at' => '2019-06-21 11:32:17'),
            array('id' => '16','parent_id' => '0','name' => 'Barneunderholdning','slug' => 'dj','photo_id' => '38','position' => NULL,'created_at' => '2019-06-17 12:07:10','updated_at' => '2019-06-21 11:33:01'),
            array('id' => '17','parent_id' => '0','name' => 'Alle typer artister m.m','slug' => 'alle-typer-artister-m-m','photo_id' => '39','position' => NULL,'created_at' => '2019-06-17 12:08:06','updated_at' => '2019-06-21 13:01:39'),
            array('id' => '18','parent_id' => '7','name' => 'One man','slug' => 'one-man','photo_id' => NULL,'position' => NULL,'created_at' => '2019-06-19 16:33:54','updated_at' => '2019-06-19 16:33:54'),
            array('id' => '19','parent_id' => '7','name' => 'Duo','slug' => 'duo','photo_id' => NULL,'position' => NULL,'created_at' => '2019-06-20 10:17:06','updated_at' => '2019-06-20 10:17:06'),
            array('id' => '20','parent_id' => '7','name' => 'Trio','slug' => 'trio','photo_id' => NULL,'position' => NULL,'created_at' => '2019-06-20 10:19:08','updated_at' => '2019-06-20 10:19:08'),
            array('id' => '23','parent_id' => '7','name' => 'Kvartet','slug' => 'kvartet','photo_id' => NULL,'position' => NULL,'created_at' => '2019-06-24 10:16:26','updated_at' => '2019-06-24 10:16:26'),
            array('id' => '24','parent_id' => '7','name' => 'Kvintet','slug' => 'kvintet','photo_id' => NULL,'position' => NULL,'created_at' => '2019-06-24 10:18:15','updated_at' => '2019-06-24 10:18:15')
        );


        DB::table('categories')->insert($categories);

    }
}
