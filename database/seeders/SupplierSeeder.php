<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            'nama' => 'PT. Garuda Kacang Atom',
            'telepon' => '08976353617',
            'alamat' => 'Jln. in aja dulu siapa tau jodoh',
        ]);
        DB::table('supplier')->insert([
            'nama' => 'PT. Aspal panas',
            'telepon' => '08222353617',
            'alamat' => 'Jln. mulu tapi nga ada status',
        ]);
        DB::table('supplier')->insert([
            'nama' => 'PT. Mencari cinta sejati',
            'telepon' => '0711353617',
            'alamat' => 'Jln. buntu jangan diterusin',
        ]);
    }
}
