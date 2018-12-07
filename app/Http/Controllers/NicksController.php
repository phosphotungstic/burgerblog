<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicksController extends Controller
{
    public function index() {
        return view('nick');
    }
}
