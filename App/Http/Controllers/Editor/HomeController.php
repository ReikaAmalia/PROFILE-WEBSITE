<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.editor.dashboard.index');
    }
}
