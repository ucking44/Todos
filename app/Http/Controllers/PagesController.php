<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new()
    {
    	 echo "This is a nice piece of work, 4 man......";
    	return view('new');
    }
}
