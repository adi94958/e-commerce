<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjualanModel;
use App\Models\JualModel;
use App\Models\BarangModel;

class CheckoutController extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $total = array_reduce($cart, function ($sum, $item) {
            return $sum + ($item['harga'] * $item['stok']);
        }, 0);

        $session->set('total_price', $total);

        $data = [
            'cart' => $cart,
            'total' => $total
        ];

        return view('v_checkout', $data);
    }

    public function placeOrder()
    {
        $penjualanModel = new PenjualanModel();
        $jualModel = new JualModel();
        $barangModel = new BarangModel();

        // Validasi input
        $rules = [
            'c_name' => 'required|max_length[100]',
            'c_address' => 'required|max_length[100]',
            'c_phone' => 'required|max_length[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari request
        $dataPenjualan = [
            'nama' => $this->request->getPost('c_name'),
            'alamat' => $this->request->getPost('c_address'),
            'no_hp' => $this->request->getPost('c_phone'),
            'total_harga' => session()->get('total_price'),
        ];

        // Simpan data penjualan ke database
        $penjualanModel->insert($dataPenjualan);
        $idPenjualan = $penjualanModel->getInsertID();

        // Ambil data cart dari session
        $session = session();
        $cart = $session->get('cart') ?? [];

        // Proses setiap item di cart
        foreach ($cart as $item) {
            // Simpan detail penjualan ke tabel jual
            $dataJual = [
                'id_penjualan' => $idPenjualan,
                'id_barang' => $item['id_barang'],
                'jumlah' => $item['stok'],
                'harga' => $item['harga'],
            ];
            $jualModel->insert($dataJual);

            // Kurangi stok barang
            $barang = $barangModel->find($item['id_barang']);
            $barang['stok'] -= $item['stok'];
            $barangModel->update($item['id_barang'], $barang);
        }

        // Bersihkan keranjang
        session()->remove('cart');

        return redirect()->to('/checkout/success');
    }

    public function success()
    {
        return view('v_success');
    }
}
