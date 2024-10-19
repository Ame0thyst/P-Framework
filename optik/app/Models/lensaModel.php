<?php

namespace App\Models;

use CodeIgniter\Model;

class LensaModel extends Model
{
    protected $table      = 'lensa';
    protected $primaryKey = 'kode_lensa';

    protected $allowedFields = ['kode_lensa', 'jenis_lensa', 'brand_lensa', 'harga', 'stok', 'distributor'];

    // Join with distributor table
    public function getLensa($keyword = null)
    {
        $builder = $this->db->table($this->table);
        $builder->select('lensa.*, distributor.nama_distributor');
        $builder->join('distributor', 'lensa.distributor = distributor.kode_distributor');

        if ($keyword) {
            $builder->like('brand_lensa', $keyword);
        }

        return $builder->get()->getResultArray();
    }
}
