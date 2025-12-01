<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $Articles = Article::paginate(10);
        return view('admin.index', compact('Articles'));
    }
}
