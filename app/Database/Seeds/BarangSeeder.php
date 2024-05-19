<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_barang' => 'Nordic Chair',
                'harga' => '50000',
                'stok' => 10,
                'gambar' => 'product-3.png',
            ],
            [
                'nama_barang' => 'Kruzo Aero Chair',
                'harga' => '78000',
                'stok' => 5,
                'gambar' => 'product-2.png',
            ],
            [
                'nama_barang' => 'Ergonomic Chair',
                'harga' => '43000',
                'stok' => 8,
                'gambar' => 'product-3.png',
            ],
            [
                'nama_barang' => 'Modern Chair',
                'harga' => '60000',
                'stok' => 7,
                'gambar' => 'product-1.png',
            ],
            [
                'nama_barang' => 'Simple Chair',
                'harga' => '30000',
                'stok' => 15,
                'gambar' => 'product-4.png',
            ],
            [
                'nama_barang' => 'Classic Chair',
                'harga' => '70000',
                'stok' => 4,
                'gambar' => 'product-5.png',
            ],
            [
                'nama_barang' => 'Luxury Chair',
                'harga' => '120000',
                'stok' => 3,
                'gambar' => 'product-6.png',
            ],
            [
                'nama_barang' => 'Wooden Chair',
                'harga' => '40000',
                'stok' => 12,
                'gambar' => 'product-7.png',
            ],
        ];

        // Using Query Builder
        $this->db->table('barang')->insertBatch($data);
    }
}
