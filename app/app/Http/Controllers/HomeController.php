<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }

    public function index(){
        return view('blog.index');
    }

    public function about(){
        $page_name = "Sobre nós";
        return view('blog.pages.about',compact('page_name'));
    }

    public function team(){
        $page_name = "Equipe";
        return view('blog.pages.team',compact('page_name'));
    }

    public function services(){
        $page_name = "Serviços";
        return view('blog.pages.services',compact('page_name'));
    }

    public function blog(){
        $posts = Post::paginate(6);
        $page_name = "Blog";
        return view('blog.archive',compact('posts','page_name'));
    }
    
    public function contact(){
        $page_name = "Contacte-nos";
        return view('blog.pages.contact', compact('page_name'));
    }

}
