<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Testimonial',
            'content' => 'admin/testimonial/index'
        ];
        return view('_layout/v_wrapper', $data);
    }
}
