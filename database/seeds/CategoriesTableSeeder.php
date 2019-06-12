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
            array('id' => '8','name' => 'Troubadoures','slug' => 'troubadoures','photo_id' => '26','position' => NULL,'created_at' => '2019-06-10 07:44:12','updated_at' => '2019-06-12 13:52:44')
        );


        DB::table('categories')->insert($categories);

    }
}
