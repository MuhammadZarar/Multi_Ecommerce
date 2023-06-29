<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website_view()
    {
        return view('website.index');
    }
}
