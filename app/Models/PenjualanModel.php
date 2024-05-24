<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table            = 'penjualan';
    protected $primaryKey       = 'id_penjualan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'alamat', 'no_hp', 'total_harga'];

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
        'nama' => 'required|max_length[100]',
        'alamat' => 'required|max_length[100]',
        'no_hp' => 'required|max_length[100]',
        'total_harga' => 'required',
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'Nama is required',
            'max_length' => 'Nama cannot exceed 100 characters',
        ],
        'alamat' => [
            'required' => 'Alamat is required',
            'max_length' => 'Alamat cannot exceed 100 characters',
        ],
        'no_hp' => [
            'required' => 'No HP is required',
            'max_length' => 'No HP cannot exceed 100 characters',
        ],
        'total_harga' => [
            'required' => 'Total Harga is required',
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
