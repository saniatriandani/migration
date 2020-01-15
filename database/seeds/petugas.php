<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas_model::insert([
            [
              'nama_petugas'  => 'farhan',
              'alamat' => 'bululawang',
              'telp'          => '089601796849',
              'user_name'   => 'farhanuda',
              'password' => '1234',
              'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'  => 'anisha',
                'alamat' => 'sawojajar',
                'telp'          => '089601796849',
                'user_name'   => 'anishatrie',
                'password' => '123456',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'  => 'niansa',
                'alamat' => 'magetan',
                'telp'          => '089601796849',
                'user_name'   => 'niansa60',
                'password' => '12345678',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'  => 'aulia',
                'alamat' => 'magetan',
                'telp'          => '089601796849',
                'user_name'   => 'aulia10',
                'password' => '123490',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas'  => 'cici',
                'alamat' => 'pasuruan',
                'telp'          => '089601796849',
                'user_name'   => 'cicaci',
                'password' => '123441',
                'created_at' => date('Y-m-d H:i:s')
              ],
        ]);
    }
}
