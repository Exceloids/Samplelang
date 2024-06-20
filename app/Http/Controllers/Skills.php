<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Skills extends Controller
{
    public function index()
    {
        $data = [
            'skill1' => 'Video Editing',
            'skill2' => 'Photography'
        ];
        return view('skills', $data);
    }
}
