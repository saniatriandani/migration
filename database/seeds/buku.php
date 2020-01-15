<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\buku_model::insert([
            [
              'judul'  => 'bukan dilan',
              'penerbit' => 'cj entertaimen',
              'pengarang'          => 'nisa sabyan',
              'foto' => '/',
              'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul'  => 'hangout',
                'penerbit' => 'grandmedia',
                'pengarang'          => 'gading marten',
                'foto' => '/',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul'  => 'aku,kau dan kua',
                'penerbit' => 'grandmedia',
                'pengarang'          => 'tasya farasya',
                'foto' => '/',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul'  => 'cinta dalam diri',
                'penerbit' => 'cj entertaimen',
                'pengarang'          => 'gambus',
                'foto' => '/',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul'  => 'danur',
                'penerbit' => 'cj entertaimen',
                'pengarang'          => 'risa saraswati',
                'foto' => '/',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
