<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\BarangModel;

class HomeController extends BaseController
{
    public function index(): string
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();

        return view('v_home', $data);
    }
}
