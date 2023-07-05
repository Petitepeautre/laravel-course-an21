<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Article;



class ArticleController extends Controller
{
    public function index(): View
    {

        // Recuperer depuis la BDD les articles
        $articles = Article::all()->sortByDesc('created_at');

        // Retourner la vue avec les articles
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Request $request): View {
        $article = Article::find($request->id);

        return view('articles.show', ['article' => $article]);
    }

    public function create(): View {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse {
        
        Article::create($request->all());
        return redirect()->route('articles.index')
                         ->with('success', 'Article ajouté.');
        // Add input infos into bdd

    }

    public function edit(Request $request): View {
        $article = Article::find($request->id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request): RedirectResponse {
        $article = Article::find($request->id);
        $article->update($request->all());
        return redirect()->route('articles.index')
                         ->with('success', "Article $article->title édité.");
    }

    public function destroy(Request $request): RedirectResponse{
        $article = Article::find($request->id);
        $article->delete();
        return redirect()->route('articles.index')
                         ->with('success', "Article $article->title supprimé.");
    }
}
