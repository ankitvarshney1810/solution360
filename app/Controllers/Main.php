<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
        ];

        return view('layout/header', $data)
            . view('layout/navbar')
            . view('index')
            . view('layout/footer');
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Us',
        ];

        return view('layout/header', $data)
            . view('layout/navbar')
            . view('about')
            . view('layout/footer');
    }

    public function portfolio(): string
    {
        $data = [
            'title' => 'Portfolio',
        ];

        return view('layout/header', $data)
            . view('layout/navbar')
            . view('portfolio')
            . view('layout/footer');
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact Us',
        ];

        return view('layout/header', $data)
            . view('layout/navbar')
            . view('contactUs')
            . view('layout/footer');
    }

    public function services($slug = null)
    {
        $services = [

            'rwa-advertising' => [
                'title' => 'RWA Advertising',
                'view'  => 'services/rwa-advertising',
            ],

            'newspaper-insert' => [
                'title' => 'Newspaper Insert',
                'view'  => 'services/newspaper-insert',
            ],

            'print-media' => [
                'title' => 'Print Media',
                'view'  => 'services/print-media',
            ],

            'lookwalker' => [
                'title' => 'Lookwalker',
                'view'  => 'services/lookwalker',
            ],

            'customer-acquisition' => [
                'title' => 'Customer Acquisition',
                'view'  => 'services/customer-acquisition',
            ],

            'outdoor-advertising' => [
                'title' => 'Outdoor Advertising',
                'view'  => 'services/outdoor-advertising',
            ],

            'cinema-advertising' => [
                'title' => 'Cinema Advertising',
                'view'  => 'services/cinema-advertising',
            ],

            'radio-advertising' => [
                'title' => 'Radio Advertising',
                'view'  => 'services/radio-advertising',
            ],

        ];

        // Invalid slug check
        if (!array_key_exists($slug, $services)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $services[$slug]['title']
        ];

        return view('layout/header', $data)
            . view('layout/navbar')
            . view($services[$slug]['view'])
            . view('layout/footer');
    }
}
