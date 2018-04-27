<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class ArticlesController extends Controller
{
    public function index()
    {
    	// $articles = Article::all();
    	$articles = Article::latest()->published()->get();

    	return view('articles.index',compact('articles'));
    }

    /*详情页*/
    public function show($id)
    {
    	$article = Article::findOrFail($id);
    	// dd($article->published_at->diffForHumans());
    	// dd($article->created_at->diffForHumans());  //返回create_at距离现在的时间

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

    public function store(Request $request)
    {
    	// dd($request->all());
    	//接收post过来的数据

    	//表单验证  方法一：使用Requests\CreateArticleRequest
    	// 方法二
    	// $rules = [
     //        'title' => 'required|min:4', //email ,min:3
     //        'content' => 'required',
     //        'published_at' => 'required',
     //    ];
    	// $this->validate($request,$rules);

    	//存入数据库

    	//重定向
    	// $request->get('title'); //获取单个数据

    	//  1========
    	// $input = $request->all();
    	// $input['published_at'] = Carbon::now();
    	// Article::create($input);

    	//  2=========
    	Article::create($request->all());

    	return redirect('/articles');
    }

    /*编辑文章*/
    public function edit($id)
    {
    	$article = Article::findOrFail($id);

    	return view('articles.edit',compact('article'));
    }

    public function update(Requests\CreateArticleRequest $request,$id)
    {
    	$article = Article::findOrFail($id);
    	$article->update($request->all());

    	return redirect('/articles');
    }

}
