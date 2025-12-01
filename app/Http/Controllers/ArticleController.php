<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function index()
    {
        $Articles = Article::paginate(10);
        $Users = User::paginate(10);
        return view('admin.index', compact('Articles','Users'));
    }
}
