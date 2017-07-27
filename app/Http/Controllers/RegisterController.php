<?php

namespace Foo\Http\Controllers;

use Foo\AccountUser;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;


class RegisterController extends BaseController
{

    public function index()
    {
        $msg = 'This is testing App1';
        return view('test', array("test"=>$msg));
    }

    public function postRegister(Request $request)
    {
        $contact_name = $request->input('contact_name');
        $contact_email = $request->input('contact_email');
        $contact_message = $request->input('contact_message');

        /*$response_arr = array();

        $response_arr[] = $contact_name;
        $response_arr[] = $contact_email;
        $response_arr[] = $contact_message;

        echo "<pre>".print_r($response_arr)."</pre>"; exit;*/


        $accountUser = new AccountUser();

        $accountUser->contact_name = $contact_name;
        $accountUser->contact_email = $contact_email;
        $accountUser->contact_message = $contact_message;
        $accountUser->deleted = 0;

        $accountUser->save();


        //exit("Yes");


        $msg = 'Success';
        return view('index', array("resmsg"=>$msg));
    }

    public function result()
    {
        //$accountUser = new AccountUser();
        $data = AccountUser::all();
        exit($data);
        return view('index', array("test"=>$msg));
    }
}
