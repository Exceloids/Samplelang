<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Lhorexcel Bombarda',
            'bio' => 'BSIT- Web Tech'
        ];
        return view('about-me', $data);
    }
}
