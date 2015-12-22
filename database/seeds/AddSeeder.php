<?php

use Illuminate\Database\Seeder;

class AddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content') ->insert([
            [
                'url' => 'https://www.youtube.com/watch?v=u2l6nk7pMQ0',
                'type' => 'Youtube',
                'userId' => '1',
            ],
            [
                'url' => 'https://vimeo.com/147703699',
                'type' => 'Vimeo',
                'userId' => '1',
            ],
            [
                'url' => 'https://soundcloud.com/didi-3-1/chill-mix-by-didi',
                'type' => 'Soundcloud',
                'userId' => '1',
            ],
        ]);
    }
}
