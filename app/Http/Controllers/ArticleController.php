<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('article.index', compact('articles'));
    }

    public function myArticles()
    {
        $articles = Article::where('user_id', Auth::id())
            ->with(['category', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('article.my-articles', compact('articles'));
    }

    public function show(Article $article)
    {
        $article->load(['category', 'user']);

        return view('article.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data['user_id'] = $request->user()->id;

        Article::create($data);

        return redirect()->route('articles.my')
            ->with('status', 'Articolo creato con successo.');
    }
}
