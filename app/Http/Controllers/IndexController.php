<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function __invoke()
    {
        $files = Storage::disk('sftp')->Files('jwt');
        $dir = Storage::disk('sftp')->directories('jwt');
        $pathImg = Storage::disk('sftp')->url('ts/1.jpg');
        echo "<img src=/home/beensir/{$pathImg} />";
        dump($pathImg);


    }
}
