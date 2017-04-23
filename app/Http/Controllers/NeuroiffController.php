<?php

namespace Neuroiff\Http\Controllers;

use Illuminate\Http\Request;

class NeuroiffController extends Controller
{
    public function home(){
        return view('neuroiff.home.home');
    }
}
