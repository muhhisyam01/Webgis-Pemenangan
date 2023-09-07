<?php

namespace App\Models;

use CodeIgniter\Model;

class M_anggota  extends Model
{
    protected $table      = 'anggota_rimuku';
    protected $primaryKey = 'id_anggota  ';
    protected $allowedFields = [
        'nama',
        // 'nama_relawan',
        'nik',
        // 'Sumber_kalangan',
        // 'Keterangan',
        // 'tps',
        // 'geojson',
        // 'warna',
        
    ];



    public function getTampil_relawan($id_anggota = false)
    {
        return $this->where(['id_anggota   ' => $id_anggota])->first();
    }
   
}
