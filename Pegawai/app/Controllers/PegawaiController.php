<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PegawaiController extends BaseController
{

    protected $modelPegawai;
    public function __construct()
    {
        $this->modelPegawai = new \App\Models\PegawaiModel();
    }
    public function index()
    {
        $data['pegawai'] = $this->modelPegawai->getPegawaiWithJabatan();
        return  view('pegawai/index', $data);
    }
    public function show($id)
    {
        //
    }

    public function create()
    {
        $modelJabatan = new \App\Models\JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();
        return  view('pegawai/create', $data);
    }
    public function store()
    {
        $data = [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'jabatan_id' => $this->request->getPost('jabatan_id'),
        ];
        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }
    public function edit($id)
    {
        $modelJabatan = new \App\Models\JabatanModel();
        $data['jabatan'] = $modelJabatan->findAll();
        $data['pegawai'] = $this->modelPegawai->find($id);
        return  view('pegawai/edit', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'telepon' => $this->request->getPost('telepon'),
            'jabatan_id' => $this->request->getPost('jabatan_idr5'),
        ];
        $this->modelPegawai->save($data);
        return redirect()->to('pegawai');
    }
    public function delete($id)
    {
        $this->modelPegawai->delete($id);
        return redirect()->to('pegawai');
    }
}
