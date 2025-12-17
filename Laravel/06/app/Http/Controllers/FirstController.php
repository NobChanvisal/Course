<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function index()
    {
        // return 'hello from FirstController index method';
        return view('welcome');
    }

    public function about()
    {
        return 'hello from FirstController about method';
    }

    public function contact($phone)
    {
        return 'Contact phone number is: ' . $phone;
    }
}
