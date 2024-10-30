<?php

namespace App\Controllers;

use App\Models\ImageModel;

class ImageController extends BaseController
{
    protected $imageModel;

    public function __construct()
    {
        $this->imageModel = new ImageModel();
    }

    // Menampilkan semua gambar di halaman utama
    public function index()
    {
        $data['images'] = $this->imageModel->findAll();
        return view('images/index', $data);
    }

    // Menampilkan form upload gambar
    public function create()
    {
        return view('images/create');
    }

    // Menyimpan gambar yang di-upload ke dalam database
    public function store()
    {
        $file = $this->request->getFile('image');

        if ($file && $file->isValid()) {
            $fileName = $file->getRandomName();
            $file->move('uploads', $fileName);

            $this->imageModel->save([
                'image' => $fileName,
                'description' => $this->request->getVar('description')
            ]);

            return redirect()->to('/');
        }

        return redirect()->back()->withInput()->with('error', 'Failed to upload image.');
    }

    // Menampilkan form edit gambar
    public function edit($id)
    {
        $data['image'] = $this->imageModel->find($id);

        if (!$data['image']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Image not found.');
        }

        return view('images/edit', $data);
    }

    // Memperbarui data gambar di dalam database
    public function update($id)
    {
        $file = $this->request->getFile('image');
        $imageData = [
            'description' => $this->request->getVar('description')
        ];

        // Jika ada gambar baru yang diupload, update gambar
        if ($file && $file->isValid()) {
            $fileName = $file->getRandomName();
            $file->move('uploads', $fileName);
            $imageData['image'] = $fileName;

            // Menghapus gambar lama
            $oldImage = $this->imageModel->find($id)['image'];
            if (file_exists('uploads/' . $oldImage)) {
                unlink('uploads/' . $oldImage);
            }
        }

        $this->imageModel->update($id, $imageData);

        return redirect()->to('/');
    }

    // Menghapus gambar dari database dan folder uploads
    public function delete($id)
    {
        $image = $this->imageModel->find($id);

        if ($image) {
            // Hapus gambar dari folder uploads
            if (file_exists('uploads/' . $image['image'])) {
                unlink('uploads/' . $image['image']);
            }

            // Hapus data dari database
            $this->imageModel->delete($id);
        }

        return redirect()->to('/');
    }
}
