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
            array('id' => '2','file' => '1559723232adult-boy-casual-220453.jpg','created_at' => '2019-06-05 08:27:12','updated_at' => '2019-06-05 08:27:12'),
            array('id' => '15','file' => '1559828914beautiful-beauty-blond-1587009.jpg','created_at' => '2019-06-06 13:48:34','updated_at' => '2019-06-06 13:48:34'),
            array('id' => '4','file' => '1559746541image4.jpg','created_at' => '2019-06-05 09:57:22','updated_at' => '2019-06-05 14:55:41'),
            array('id' => '5','file' => '1559734995collared-shirt-handsome-indoors-936229.jpg','created_at' => '2019-06-05 10:54:27','updated_at' => '2019-06-05 11:43:15'),
            array('id' => '6','file' => '1559735046black-and-white-boy-casual-555790.jpg','created_at' => '2019-06-05 11:44:06','updated_at' => '2019-06-05 11:44:06'),
            array('id' => '26','file' => '1560152652Troubadoures.jpg','created_at' => '2019-06-10 07:44:12','updated_at' => '2019-06-10 07:44:12'),
            array('id' => '23','file' => '1560150656weddings-musicians.jpg','created_at' => '2019-06-10 07:10:56','updated_at' => '2019-06-10 07:10:56'),
            array('id' => '24','file' => '1560151083dancearrangementer2.jpg','created_at' => '2019-06-10 07:18:03','updated_at' => '2019-06-10 07:18:03'),
            array('id' => '25','file' => '1560152455restaurantmusikere.jpg','created_at' => '2019-06-10 07:40:55','updated_at' => '2019-06-10 07:40:55'),
            array('id' => '27','file' => '1560158080jazz-musicians.jpg','created_at' => '2019-06-10 09:14:40','updated_at' => '2019-06-10 09:14:40'),
            array('id' => '28','file' => '1560158282dancearrangementer.jpg','created_at' => '2019-06-10 09:18:02','updated_at' => '2019-06-10 09:18:02'),
            array('id' => '29','file' => '1560177557collared-shirt-handsome-indoors-936229.jpg','created_at' => '2019-06-10 14:39:17','updated_at' => '2019-06-10 14:39:17'),
            array('id' => '30','file' => '1560177919Miro Trobadur.jpg','created_at' => '2019-06-10 14:45:19','updated_at' => '2019-06-10 14:45:19')
        );


        DB::table('photos')->insert($photos);
    }
}
