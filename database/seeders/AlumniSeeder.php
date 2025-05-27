<?php

namespace Database\Seeders;

use App\Models\Alumni;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumni::create([
            'Nama' => 'Jeps',
            'angkatan' => '2013',
            'Jurusan' => 'PPLG',
        ]);
        Alumni::create([
            'Nama' => 'Agus',
            'angkatan' => '2014',
            'Jurusan' => 'Akuntansi',
        ]);
        Alumni::create([
            'Nama' => 'TungTung Sahur',
            'angkatan' => '2015',
            'Jurusan' => 'Perhotelan',
        ]);
    }
}
