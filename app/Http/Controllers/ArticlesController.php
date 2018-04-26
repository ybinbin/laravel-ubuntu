<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::all();

    	return view('articles.index',compact('articles'));
    }

    /*详情页*/
    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	// $article = Article::find($id);
    	// if (is_null($article)) {
    	// 	abort(404);
    	// }
    	return view('articles.show',compact('article'));
    }

    public function create()
    {
    	return view('articles.create');
    }
}
