<?php

namespace App\Http\Controllers;

use App\Models\Article;

class FeedController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('dashboard', compact('articles'));
    }
}
