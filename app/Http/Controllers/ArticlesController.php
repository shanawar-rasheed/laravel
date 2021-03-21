<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
       //$article=Article::findOrFail($id);
      //  dd($article);
       return view('articles.show',compact('article'));
          //'article'=>$article
       //]);
    }
    public function Create()
    {
    	return view('articles.create');
    }
    public function Store()
    {	
    	
    	request()->validate([
    		'title'=>'required',
    		'excerpt'=>'required',
    		'body'=>'required'
    	]);

    	$article= new Article();
    	$article->title=request('title');
    	$article->excerpt=request('excerpt');
    	$article->body=request('body');
    	$article->save();
    	return redirect('/article');
    }   
    public function Edit(Article $article)
    {
    	//$article=Article::find($id);
    	return view('articles.edit',compact('article'));
    }

    public function Update(Article $article)
    {
	    //$article=Article::find($id);
	    $article->title=request('title');
	    $article->excerpt=request('excerpt');
	    $article->body=request('body');
	    $article->save();

   		//return redirect('/articles/'.$article->id);
   		return redirect(route('art.show',$article));
   	}
}	
