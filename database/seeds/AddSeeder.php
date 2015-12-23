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
                'mediaId' => 'u2l6nk7pMQ0',
                'userId' => '1',
                'created_at' => '2015-12-22 16:47:23',
            ],
            [
                'url' => 'https://vimeo.com/147703699',
                'type' => 'Vimeo',
                'mediaId' => '147703699',
                'userId' => '1',
                'created_at' => '2015-12-22 16:47:24',
            ],
            [
                'url' => 'https://soundcloud.com/didi-3-1/chill-mix-by-didi',
                'type' => 'Soundcloud',
                'mediaId' => 'null',
                'userId' => '1',
                'created_at' => '2015-12-22 16:47:25',
            ],
        ]);
    }
}
