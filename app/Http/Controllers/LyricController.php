<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LyricController extends Controller
{
    public function lyrics()
    {
        return view('components.pages.lyrics');
    }
}
