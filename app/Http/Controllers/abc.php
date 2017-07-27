<?php

namespace Foo\Http\Controllers;

use Illuminate\Http\Request;
use Foo\abcd;

class abc extends Controller
{
    public function index()
    {
        $data = abcd::all();
        return $data;
    }
}
