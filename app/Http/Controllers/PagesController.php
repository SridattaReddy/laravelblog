<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome to Laravel 5";
        return view('pages.index', compact('title'));
        // return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'services' => ['Web Design', 'Mobile Apps', 'Multimedia', 'Graphic Design', 'Branding', 'Digital Marketing']
        );
        return view('pages.services')->with($data);
    }
}
