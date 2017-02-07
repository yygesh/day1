<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\carbon;

class ArticlesController extends Controller
{
    //

    function index(){
    	//$articles=Article::latest('updated_at')->get();
    	//current date or less than current date artical display
    	//$articles=Article::latest('published_at')->where('published_at','<=',Carbon::now())->get();
    	//published 
    	$articles=Article::latest('published_at')->published()->get();
    	return view('articles.index',compact('articles'));
    }

    function show($id){
	$articles=Article::findOrFail($id);
	//by created_at
//	 dd($articles->created_at->addDays(8)->diffForHumans());
//by published_at
	//dd($articles->published_at);
	// return $articles;
	// if(is_null($articles)){
	// 	abort(404);
	// 	}
     	return view('articles.show',compact('articles'));
	
  
    }
    function create(){
    	return view('articles.create');
    }
    function store(Request $request){
    	//$request['published_at']=Carbon::now();
    	Article::create($request->all());
    	return redirect('articles');
    }
}
