<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
       $article=Article::find($id);
      //  dd($article);
       return view('articles.show',[
          'article'=>$article
       ]);
    }   
}
