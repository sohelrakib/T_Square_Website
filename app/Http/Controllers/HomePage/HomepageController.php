<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $title = "T-SQUARE";
        return view('home_page.pages.home',compact('title'));
    }

    public function about()
    {
        $title = "T-SQUARE - ABOUT US";
        return view('home_page.pages.about',compact('title')); 
    }

    public function contact()
    {
        $title = "T-SQUARE - CONTACT US";
        return view('home_page.pages.contact',compact('title')); 
    }

    // :::::::::::::::::: FEATURE APP :::::::::::::::::::::
    public function feature()
    {
        return redirect(route('feature.islamic'));
    }

    public function islamic()
    {
        // dd('islamic');
        $title = "T-SQUARE - ISLAMIC APP";
        return view('home_page.pages.feature.islamic',compact('title'));
    }
    public function health()
    {
        $title = "T-SQUARE - HEALTH APP";
        return view('home_page.pages.feature.health',compact('title'));
    }
    public function love()
    {
        $title = "T-SQUARE - LOVE APP";
        return view('home_page.pages.feature.love',compact('title'));
    }
    public function beauty()
    {
        $title = "T-SQUARE - BEAUTY APP";
        return view('home_page.pages.feature.beauty',compact('title'));
    }
    public function joke()
    {
        $title = "T-SQUARE - JOKE APP";
        return view('home_page.pages.feature.joke',compact('title'));
    }
    public function recipe()
    {
        $title = "T-SQUARE - RECIPE APP";
        return view('home_page.pages.feature.recipe',compact('title'));
    }

    // ::::::::::::::::::: service :::::::::::::::
    public function service()
    {
        return redirect(route('service.website'));
    }

    public function website()
    {
        $title = "T-SQUARE - WEBSITE";
        return view('home_page.pages.services.website',compact('title'));
    }
    public function software()
    {
        $title = "T-SQUARE - SOFTWARE";
        return view('home_page.pages.services.software',compact('title'));
    }
    public function marketing()
    {
        $title = "T-SQUARE - DIGITAL MARKETING";
        return view('home_page.pages.services.marketing',compact('title'));
    }
    public function platform()
    {
        $title = "T-SQUARE - PLATFORM";
        return view('home_page.pages.services.platform',compact('title'));
    }
    public function design()
    {
        $title = "T-SQUARE - APP DESIGN";
        return view('home_page.pages.services.design',compact('title'));
    }
    public function strategy()
    {
        $title = "T-SQUARE - STRATEGY";
        return view('home_page.pages.services.strategy',compact('title'));
    }
}
