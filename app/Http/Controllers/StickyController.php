<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class StickyController extends Controller
{

    public function index(): View
    {
        return view('stickies.stickies', [

        ]);
    }
}
