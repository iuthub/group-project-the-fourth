<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function articles(){
        $data = Article::all();
        return view('article',['articles'=>$data]);
    }
}
