<?php

namespace Database\Seeders;

use App\Models\Announce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Announce::create([
            'nama' => 'tegar',
            'nrp' => '5025201002',
            'tahunmasuk' => '2020',
            'semester' => '4',
            'jurusan' => 'Informatika',
            'ips' => '4.00',
            'ipk' => '4.00'
        ]);
    }
}
