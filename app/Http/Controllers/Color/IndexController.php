<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;

class IndexController extends Controller
{
    public function __invoke()
    {
        $colors = Color::orderBy('color','ASC')->get();
        return view('color.index',compact('colors'));
    }
}
