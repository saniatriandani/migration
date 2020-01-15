<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\anggota_model::insert([
            [
              'nama_anggota'  => 'dilan',
              'alamat' => 'sawojajar',
              'telp'          => '089601796849',
              'created_at' => date('Y-m-d H:i:s')
            ],
            [
              'nama_anggota'  => 'milea',
              'alamat' => 'malang',
              'telp'          => '0895396009045',
              'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota'  => 'shone',
                'alamat' => 'thailand',
                'telp'          => '089555403891',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota'  => 'tresani',
                'alamat' => 'jerman',
                'telp'          => '089539609045',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota'  => 'franasya',
                'alamat' => 'putat lor',
                'telp'          => '085987460378',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);

    }
}
