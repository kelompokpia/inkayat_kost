<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kamar;
use App\Models\Tahun;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seeder user
        \App\Models\User::factory()->create([
            'name' => 'Rohmat',
            'email' => 'kelompok@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // Seeder Tahun
        Tahun::create([
            'tahun' => '2021'
        ]);

        Tahun::create([
            'tahun' => '2022'
        ]);

        // Seeder kamar
        Kamar::create([
            'nama_kamar' => 'Kamar 1',
            'gambar_kamar' => 'kamar-1.jpeg',
            'nama_penghuni' => 'Mawar',
            'alamat'=>'pati',
            'nik_penghuni' => '1234567890123456',
            'telepon_penghuni' => '0897651526378',
            'tanggal_masuk' => '2022-11-01',
            'status_kamar' => 'Tersedia',
            'harga_kamar' => '400',
            'deskripsi_kamar' => 'kamar yang sangat nyaman'
        ]);

        Kamar::create([
            'nama_kamar' => 'Kamar 2',
            'gambar_kamar' => 'kamar-2.jpeg',
            'nama_penghuni' => 'Bunga',
            'alamat'=>'jepara',
            'nik_penghuni' => '1234567890123455',
            'telepon_penghuni' => '0897651526379',
            'tanggal_masuk' => '2022-11-01',
            'status_kamar' => 'Tersedia',
            'harga_kamar' => '410',
            'deskripsi_kamar' => 'kamar yang sangat nyaman'
        ]);

        Kamar::create([
            'nama_kamar' => 'Kamar 3',
            'gambar_kamar' => 'kamar-3.jpeg',
            'nama_penghuni' => 'Indah',
            'alamat'=>'kudus',
            'nik_penghuni' => '1234567890123454',
            'telepon_penghuni' => '0897651526370',
            'tanggal_masuk' => '2022-11-02',
            'status_kamar' => 'Terisi',
            'harga_kamar' => '430',
            'deskripsi_kamar' => 'kamar yang sangat nyaman'
        ]);
    }
}