<?php

namespace Database\Seeders;

use App\MataKuliah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MataKuliah::insert([
            'mata_kuliah' => 'Deep Learning'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Data Management'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Web Programming'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Software Engineering'
        ]);

        MataKuliah::insert([
            'mata_kuliah' => 'Time Series Analysis'
        ]);
    }
}
