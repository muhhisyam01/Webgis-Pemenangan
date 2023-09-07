<?php

namespace App\Controllers;
use App\Models\M_relawan;
use App\Models\M_anggota;
// use App\Models\M_binanga;


class Home extends BaseController
{
    protected $M_relawan;
    protected $M_anggota;
    // protected $M_binanga;

    public function __construct()
    {
        $this->M_relawan = new M_relawan();
        $this->M_anggota = new M_anggota();
        // $this->M_binanga = new M_binanga();
        
    }

    public function index()
    {
        echo view ('Template/Head');
        echo view ('Fitur/Dashboard');
        echo view ('Template/Footer');
    }

    public function Relawan()
    {
        $data = [
            'rimuku' => $this->M_relawan->orderBy('id_rimuku', 'desc')->findAll(),
        ];
        echo view ('Template/Head');
        echo view ('Fitur/Relawan', $data);
        echo view ('Template/Footer');
    }
    public function TambahRelawan()
    {
        echo view ('Template/Head');
        echo view ('Fitur/Tambah_Relawan');
        echo view ('Template/Footer');
    }
    public function Proses_relawan()
    {
        if (!$this->validate([
            'nama' => [
                'label' => 'nama',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            // 'nama_relawan' => [
            //     'label' => 'nama_relawan',
            //     'rules' => 'required|min_length[5]',
            //     'errors' => [
            //         'required' => '{field} Harus diisi',
            //         'min_length' => '{field} terlalu pendek',
            //         // 'valid_email' => '{field} periksa kembali email anda'
            //     ]
            // ],
            'nik' => [
                'label' => 'nik',
                'rules' => 'required|min_length[2]|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                    'numeric' => '{field} Harus Angka',
                ]
            ],
            'tps' => [
                'label' => 'tps',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'sumber_kalangan' => [
                'label' => 'sumber_kalangan',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
            'keterangan' => [
                'label' => 'keterangan',
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                ]
            ],
          
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
           

            $this->M_relawan->save([
                'nama' => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                'tps' => $this->request->getVar('tps'),
                'sumber_kalangan' => $this->request->getVar('sumber_kalangan'),
                'keterangan' => $this->request->getVar('keterangan'),
                
            ]);
            session()->setFlashdata('sukses', 'Data Berhasil disimpan');
            return redirect()->to('relawan');
        }
    }
    
    public function AnggotaRelawan()
    {
        $data = [
            'anggota' => $this->M_anggota->orderBy('id_anggota', 'desc')->findAll(),
        ];
        echo view ('Template/Head');
        echo view ('Fitur/AnggotaTeam', $data);
        echo view ('Template/Footer');
    }
    public function Proses_anggota_relawan()
    {
        if (!$this->validate([
            'nama' => [
                'label' => 'nama',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek'
                ]
            ],
            // 'nama_relawan' => [
            //     'label' => 'nama_relawan',
            //     'rules' => 'required|min_length[5]',
            //     'errors' => [
            //         'required' => '{field} Harus diisi',
            //         'min_length' => '{field} terlalu pendek',
            //         // 'valid_email' => '{field} periksa kembali email anda'
            //     ]
            // ],
            'nik' => [
                'label' => 'nik',
                'rules' => 'required|min_length[2]|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} terlalu pendek',
                    'numeric' => '{field} Harus Angka',
                ]
            ],
           
          
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
           

            $this->M_anggota->save([
                'nama' => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                
                
            ]);
            session()->setFlashdata('sukses', 'Data Berhasil disimpan');
            return redirect()->to('anggotaRelawan');
        }
    }
    public function TambahTeam()
    {
        echo view ('Template/Head');
        echo view ('Fitur/Tambah_team');
        echo view ('Template/Footer');
    }

    public function Maps()
    {
        $data = [
            'binanga' => $this->M_relawan->orderBy('id_rimuku', 'desc')->findAll(),
        ];
        return view ('Template/Head');
        return view ('Fitur/binanga');
        return view ('Template/Footer');
    }

    public function Coba()
    {
        $data = [
            'binanga' => $this->M_relawan->orderBy('id_rimuku', 'desc')->findAll(),
        ];
        echo view ('Template/Head');
        echo view ('Fitur/gambar', $data);
        echo view ('Template/Footer');
    }
}
