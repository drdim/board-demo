<?php

use Illuminate\Database\Seeder;

class BulletinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulletins')->insert([
            'title' => 'Отдам даром фигурки дельфинов и лошади',
            'description' => 'Вид товара: Предметы интерьера, искусство
Отдам даром,бесплатно фигурки дельфинов и лошади.
Состояние на фото.
Самовывоз,от метро 7 минут ходьбы.
Связь:Вибер,Вотсапп,i-мессенджер,сообщения сюда.',
            'user_id' => 1,
            'price' => '1000',
            'image' => '/upload/images/test.jpg',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('bulletins')->insert([
            'title' => 'Трех колесный самокат',
            'description' => 'Вид товара: Велосипеды и самокаты
Самокат в хорошем состоянии.Пользовались три раза.Продаю так как дочка не смогла на нем кататься из за того что привыкла к самокату у которого два колеса были спереди,а у этого сзади.',
            'user_id' => 1,
            'price' => '5000',
            'image' => '/upload/images/test2.jpg',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('bulletins')->insert([
            'title' => 'Hudora L205 with lights',
            'description' => 'Вид товара: Велосипеды и самокаты
HUDORA L205 with lights',
            'user_id' => 2,
            'price' => '2890',
            'image' => '/upload/images/test3.jpg',
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
