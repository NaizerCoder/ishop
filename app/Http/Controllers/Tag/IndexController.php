<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::orderBy('title','ASC')->get();
        return view('tag.index',compact('tags'));
    }
}
