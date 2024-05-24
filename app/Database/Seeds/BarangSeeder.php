<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_barang' => 'Vest coquette',
                'harga' => '250000',
                'stok' => 10,
                'gambar' => 'produk-1.jpg',
            ],
            [
                'nama_barang' => 'Long vest',
                'harga' => '210000',
                'stok' => 5,
                'gambar' => 'produk-2.jpg',
            ],
            [
                'nama_barang' => 'Crop vest',
                'harga' => '220000',
                'stok' => 8,
                'gambar' => 'produk-3.jpg',
            ],
            [
                'nama_barang' => 'Feminim vest',
                'harga' => '180000',
                'stok' => 7,
                'gambar' => 'produk-4.jpg',
            ],
            [
                'nama_barang' => 'Minimalist vest',
                'harga' => '200000',
                'stok' => 15,
                'gambar' => 'produk-5.jpg',
            ],
        ];

        // Using Query Builder
        $this->db->table('barang')->insertBatch($data);
    }
}
