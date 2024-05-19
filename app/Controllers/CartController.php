<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BarangModel;

class CartController extends BaseController
{
    public function index()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        return view('v_cart', ['cart' => $cart]);
    }

    public function addToCart($barangId)
    {
        $session = session();
        $barangModel = new BarangModel();
        $barang = $barangModel->find($barangId);

        if (!$barang) {
            return redirect()->back()->with('error', 'barang not found');
        }

        $cart = $session->get('cart') ?? [];
        if (isset($cart[$barangId])) {
            $cart[$barangId]['stok'] += 1;
        } else {
            $cart[$barangId] = [
                'id_barang' => $barang['id_barang'],
                'nama_barang' => $barang['nama_barang'],
                'harga' => $barang['harga'],
                'stok' => 1,
                'gambar' => $barang['gambar']
            ];
        }

        $session->set('cart', $cart);

        return redirect()->to('/shop');
    }

    public function tambahbarang($id_barang)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (isset($cart[$id_barang])) {
            $cart[$id_barang]['stok']++;
        } else {
            // Retrieve barang details from the database
            $itemModel = new BarangModel();
            $barang = $itemModel->find($id_barang);
            if ($barang) {
                $cart[$id_barang] = [
                    'id_barang' => $barang['id_barang'],
                    'nama_barang' => $barang['nama_barang'],
                    'price' => $barang['price'],
                    'stok' => 1,
                    'gambar' => $barang['gambar']
                ];
            }
        }

        $session->set('cart', $cart);
        return redirect()->to('/cart');
    }

    public function kurangiBarang($id_barang)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (isset($cart[$id_barang])) {
            if ($cart[$id_barang]['stok'] > 1) {
                $cart[$id_barang]['stok']--;
            } else {
                unset($cart[$id_barang]);
            }
        }

        $session->set('cart', $cart);
        return redirect()->to('/cart');
    }

    public function deleteFromCart($barangId)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        if (isset($cart[$barangId])) {
            unset($cart[$barangId]);
            $session->set('cart', $cart);
        }

        return redirect()->to('/cart');
    }
}
