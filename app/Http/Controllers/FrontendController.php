<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function About()
    {
       //return view('about');
       return view('about',[
         'articles'=>Article::take(3)->latest()->get()
         ]);
    }
    public function Article()
    {
      return view('article',[
         'articles'=>Article::latest()->get()
         ]);
    }
    public function Welcome()
    {
       return view('welcome');
    }
    public function show($id)
    {
       $article=Article::find($id);
      //  dd($article);
       return view('article',[
          'article'=>$article
       ]);
    }
}
