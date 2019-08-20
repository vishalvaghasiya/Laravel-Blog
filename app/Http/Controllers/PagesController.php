<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function service(){
        $title = 'Services Titile';
//        return view('pages.services', compact('titles'));
        return view('pages.services')->with('titles', $title);
    }

    public function indexhome(){
        return view('home');
    }
}
