<?php

namespace App\Controllers;

use App\Models\LensaModel;
use CodeIgniter\Controller;

class LensaController extends Controller
{
    public function index()
    {
        $model = new LensaModel();

        // Pencarian berdasarkan brand lensa
        $keyword = $this->request->getGet('cari');

        $data = [
            'lensa' => $model->getLensa($keyword),
            'keyword' => $keyword
        ];

        return view('lensa_view', $data);
    }
}
