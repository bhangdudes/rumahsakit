<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            
            'nama' => 'teddy',
           'email' => 'teddy@mail.com',
           'password' => Hash::make('teddy123')
        ]);

        \App\Models\Pasien::factory(7)->create();
        
        \App\Models\Jeniskamar::create([
            'kode_kelas' => 'K1',
            'kelas' => 'Kelas 1'
        ] 
        );

        \App\Models\Jeniskamar::create([
            'kode_kelas' => 'K2',
            'kelas' => 'Kelas 2'
        ] 
        );

        
        \App\Models\Jeniskamar::create([
            'kode_kelas' => 'K3',
            'kelas' => 'Kelas 3'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Melati 1',
            'id_jeniskamar' => 'K1'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Melati 2',
            'id_jeniskamar' => 'K1'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Mawar 1',
            'id_jeniskamar' => 'K1'
        ] 
        );


        \App\Models\Kamar::create([
            'nama_kamar' => 'Anggrek 1',
            'id_jeniskamar' => 'K2'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Anggrek 2',
            'id_jeniskamar' => 'K2'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Anak 1',
            'id_jeniskamar' => 'K2'
        ] 
        );

        \App\Models\Kamar::create([
            'nama_kamar' => 'Anak 2',
            'id_jeniskamar' => 'K3'
        ] 
        );



        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
