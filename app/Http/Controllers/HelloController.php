<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloAction()
    {
        return view('hello', 
        ['name' => 'hamza', 'age' => 26, 'books' => [
            'story',
            'novel',
            'comic'
        ]]);;
    }
}
