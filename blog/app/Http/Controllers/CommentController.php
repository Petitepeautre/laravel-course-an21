<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

  public function store(Request $request): RedirectResponse {
    $article = Article::find($request->id);
    Comment::create(['content' => $request->content, 'article_id'=> $request->id]);
    return redirect()->route('articles.show', $request->id)
                     ->with('success', 'Commentaire ajouté.');
    // Add input infos into bdd

  }
}