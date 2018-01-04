<?php

use Illuminate\Database\Seeder;
use sdc\Event;
use sdc\Instructor;
use sdc\User;
use sdc\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = User::firstOrCreate(['name' => 'Visitante', 'email' => 'visitante@email.com', 'password' => 'teste123']);

        $e = Event::firstOrCreate([
          'name' => 'Evento 1',
          'active' => true,
          'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'cover' => 'http://via.placeholder.com/300x300/'
        ]);
        Event::firstOrCreate([
          'name' => 'Evento 2',
          'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'cover' => 'http://via.placeholder.com/300x300/'
        ]);
        Event::firstOrCreate([
          'name' => 'Evento 3',
          'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'cover' => 'http://via.placeholder.com/300x300/'
        ]);
        Event::firstOrCreate([
          'name' => 'Evento 4',
          'description' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'cover' => 'http://via.placeholder.com/300x300/'
        ]);

        $i1 = Instructor::firstOrCreate([
          'name' => 'Instrutor 1',
          'biography' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'avatar' => 'http://via.placeholder.com/190x250/'
        ]);
        $i2 = Instructor::firstOrCreate([
          'name' => 'Instrutor 2',
          'biography' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'avatar' => 'http://via.placeholder.com/190x250/'
        ]);
        $i3 = Instructor::firstOrCreate([
          'name' => 'Instrutor 3',
          'biography' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'avatar' => 'http://via.placeholder.com/190x250/'
        ]);
        $i4 = Instructor::firstOrCreate([
          'name' => 'Instrutor 4',
          'biography' => 'Mussum Ipsum, cacilds vidis litro abertis. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Casamentiss faiz malandris se pirulitá. In elementis mé pra quem é amistosis quis leo.',
          'avatar' => 'http://via.placeholder.com/190x250/'
        ]);
        $e->instructors()->save($i1);
        $e->instructors()->save($i2);
        $e->instructors()->save($i3);
        $e->instructors()->save($i4);

        // Ticket::firstOrCreate(['name' => 'não sei', 'amount' => 50, 'value' => 35.42, 'event' => $e]);
    }
}
