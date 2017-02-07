<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    function index(){

    }

    function contact(){
    	$title="Contact Page";
    	return view('pages.contact',compact('title'));
    }
    function about(){

    	//$data=array('name'=>'hello',
  //  				'age'=>'23');
    	$data=['ktm','banesswor','new llaza'];
    	return view('pages.about',compact('data'));
    }
}
