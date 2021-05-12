<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class HelloController extends Controller
{
    public function Hello(){
        echo 'This is a Hellow Page';
    }

    Public Function Hello2(){
        echo 'This is a Hellow 2 Page';
    }
}
