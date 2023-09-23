<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
    {
        $mahasiswa1 = new Mahasiswa([
            'nama' => 'John Doe',
            'email' => 'john.doe@example.com',
            'nim' => '12345',
        ]);
        $mahasiswa1->save(); 

        $mahasiswa2 = new Mahasiswa([
            'nama' => 'Jane Smith',
            'email' => 'smith@example.com',
            'nim' => '67890',
        ]);
        $mahasiswa2->save(); 
    }

}
