<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about(): string
    {
        return view('about');
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function faqs(): string
    {
        return view('faqs');
    }
}
