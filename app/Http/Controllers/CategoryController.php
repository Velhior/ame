<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function fitness ()
    {
        return view('fitness');
    }
    public function food ()
    {
        return view('food');
    }
    public function motivation ()
    {
        return view('motivation');
    }
    public function event ()
    {
        return view('event');
    }
}
