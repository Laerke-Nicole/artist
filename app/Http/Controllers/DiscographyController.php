<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscographyController extends Controller
{
    public function discography()
    {
        return view('components.pages.discography');
    }
}
