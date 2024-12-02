<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $news_data = [
            [
                'title' => 'Selamat datang di UMRI',
                'slug'  => 'umri-intro',
                'content' => 'Sang Pencerah Muda Dari Bumi Melayu.'
            ],
            [
                'title' => 'Hello World',
                'slug' => 'hello-world',
                'content' => 'Hello World, ini contoh artikel'
            ],
            [
                'title' => 'Mahasiswa Teknik Informatika UMRI',
                'slug'  => 'tif-meetup',
                'content' => 'Himpunan MAhasiswa Teknik Informatika UMRI SMART..'
            ]
        ];

        foreach ($news_data as $data) {
            // insert semua data ke tabel
            $this->db->table('news')->insert($data);
        }
    }
}
