<?php

namespace App\Models;

use CodeIgniter\Model;

class JualModel extends Model
{
    protected $table            = 'jual';
    protected $primaryKey       = 'id_jual';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_penjualan', 'id_barang', 'jumlah', 'harga'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_penjualan' => 'required|integer',
        'id_barang'    => 'required|integer',
        'jumlah'       => 'required|integer',
        'harga'        => 'required|decimal',
    ];
    protected $validationMessages   = [
        'id_penjualan' => [
            'required' => 'ID Penjualan is required',
            'integer'  => 'ID Penjualan must be an integer',
        ],
        'id_barang' => [
            'required' => 'ID Barang is required',
            'integer'  => 'ID Barang must be an integer',
        ],
        'jumlah' => [
            'required' => 'Jumlah is required',
            'integer'  => 'Jumlah must be an integer',
        ],
        'harga' => [
            'required' => 'Harga is required',
            'decimal'  => 'Harga must be a decimal value',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
