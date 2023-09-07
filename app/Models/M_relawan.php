<?php

namespace App\Models;

use CodeIgniter\Model;

class M_relawan  extends Model
{
    protected $table      = 'rimuku';
    protected $primaryKey = 'id_rimuku  ';
    protected $allowedFields = [
        'nama_relawan',
        // 'nama_relawan',
        'nik',
        'sumber_kalangan',
        'keterangan',
        'tps',
        'geojson',
        // 'warna',
        
    ];



    public function getTampil_relawan($id_kelrimuku = false)
    {
        return $this->where(['id_kelrimuku   ' => $id_kelrimuku])->first();
    }
  
    
  
   
}
