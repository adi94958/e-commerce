<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BarangModel;

class ShopController extends BaseController
{
    public function index()
    {
        //
    }

    public function getAllBarang () {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();

        return view('v_shop', $data);
    }
}