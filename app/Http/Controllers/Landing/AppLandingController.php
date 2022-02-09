<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppLandingController extends Controller
{
    public function index()
    {
        return redirect(route('islamic'));
    }
    public function islamic()
    {
    	return view('landing.apps.islamic');
    }

    public function joke()
    {
    	return view('landing.apps.joke');
    }

    public function beauty()
    {
    	return view('landing.apps.beauty');
    }

    public function health()
    {
    	return view('landing.apps.health');
    }

    public function love()
    {
    	return view('landing.apps.love');
    }

    public function recipe()
    {
    	return view('landing.apps.recipe');
    }
}
