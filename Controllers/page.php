<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman artikel',
            'content' => 'Ini adalah halaman artikel Pertanyaan dan Tugas'
            ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman contact',
            'content' => 'Ini adalah halaman kontak Pertanyaan dan Tugas'
            ]);
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "Ini halaman Term of Service";
    }
}