<?php

namespace App\Http\Controllers;
use App\Category;

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
        $category = Category::all();
        return view('blog',compact('category', $category));
    }

    public function contact()
    {
        
        return view('contact');
    }

    
}
