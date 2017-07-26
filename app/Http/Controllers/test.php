<?php

namespace Foo\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class test extends BaseController
{
    public function index()
    {
        $msg = 'This is testing App1';
        return view('test', array("test"=>$msg));
    }
}
