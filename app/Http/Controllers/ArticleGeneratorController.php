<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleGeneratorController extends Controller
{
    function index(){
        return view('index');
    }

    function generate(Request $request){
$content=$request->text;


        return back()->with('content');
    }
}
