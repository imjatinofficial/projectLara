<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about()
    {
        $title = 'About';
        return view('about')->with('title', $title);
    }
    function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => array(
                'Management',
                'Transport',
                'Security'
            )
        );
        return view('services')->with($data);
    }
    function blog()
    {
        return view('blog');
    }
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
}
