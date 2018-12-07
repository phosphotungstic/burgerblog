<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicksController extends Controller
{
    public function index($name = 'Nick') {
        return view('nick', ["name" => $name]);
    }
}
