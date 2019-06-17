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
            array('id' => '7','name' => 'Restaurantmusikere','slug' => 'restaurantmusikere','photo_id' => '25','position' => NULL,'created_at' => '2019-06-10 07:40:55','updated_at' => '2019-06-12 13:52:40'),
            array('id' => '5','name' => 'Bryllup','slug' => 'bryllup','photo_id' => '23','position' => NULL,'created_at' => '2019-06-10 07:10:33','updated_at' => '2019-06-12 13:52:14'),
            array('id' => '6','name' => 'Dancearrangementer','slug' => 'dancearrangementer','photo_id' => '24','position' => NULL,'created_at' => '2019-06-10 07:18:03','updated_at' => '2019-06-12 13:52:27'),
            array('id' => '8','name' => 'Pubmusikere','slug' => 'troubadoures','photo_id' => '26','position' => NULL,'created_at' => '2019-06-10 07:44:12','updated_at' => '2019-06-17 12:04:09'),
            array('id' => '9','name' => 'Pianobar','slug' => 'pianobar','photo_id' => '31','position' => NULL,'created_at' => '2019-06-17 12:01:26','updated_at' => '2019-06-17 12:01:26'),
            array('id' => '10','name' => 'Lobby Pianist','slug' => 'lobby-pianist','photo_id' => '32','position' => NULL,'created_at' => '2019-06-17 12:01:58','updated_at' => '2019-06-17 12:02:15'),
            array('id' => '11','name' => 'Countrymusikere','slug' => 'countrymusikere','photo_id' => '33','position' => NULL,'created_at' => '2019-06-17 12:03:12','updated_at' => '2019-06-17 12:03:12'),
            array('id' => '12','name' => 'Pop-rock musikere','slug' => 'pop-rock-musikere','photo_id' => '34','position' => NULL,'created_at' => '2019-06-17 12:03:56','updated_at' => '2019-06-17 12:03:56'),
            array('id' => '13','name' => 'Jazzmusikere','slug' => 'jazzmusikere','photo_id' => '35','position' => NULL,'created_at' => '2019-06-17 12:04:33','updated_at' => '2019-06-17 12:04:33'),
            array('id' => '14','name' => 'Klassisk musikk','slug' => 'klassisk-musikk','photo_id' => '36','position' => NULL,'created_at' => '2019-06-17 12:05:07','updated_at' => '2019-06-17 12:05:07'),
            array('id' => '15','name' => 'Barneunderholdning','slug' => 'barneunderholdning','photo_id' => '37','position' => NULL,'created_at' => '2019-06-17 12:06:49','updated_at' => '2019-06-17 12:06:49'),
            array('id' => '16','name' => 'DJ','slug' => 'dj','photo_id' => '38','position' => NULL,'created_at' => '2019-06-17 12:07:10','updated_at' => '2019-06-17 12:07:10'),
            array('id' => '17','name' => 'Alle typer artister m.m.','slug' => 'alle-typer-artister-m-m','photo_id' => '39','position' => NULL,'created_at' => '2019-06-17 12:08:06','updated_at' => '2019-06-17 12:08:06')
        );


        DB::table('categories')->insert($categories);

    }
}
