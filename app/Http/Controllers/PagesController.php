<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');
    }

    public function about()
    {
        
        return view('about');
    }

    public function services()
    {
        
        return view('services');
    }

    public function portfolio()
    {
        
        return view('portfolio');
    }

    public function blogs()
    {
        
        return view('blog');
    }

    public function contact()
    {
        
        return view('contact');
    }

    
}
