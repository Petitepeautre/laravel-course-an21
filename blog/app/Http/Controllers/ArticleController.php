<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    public function index():View
    {

        // Recuperer depuis la BDD les articles
        $articles = [
            'articles' => [
                [
                    "id" => 1,
                    "title" => "Architecture MVC",
                    "content" => "Lorem ipsum mvc...",
                    "user_id" => 3
                ],
                [
                    "id" => 2,
                    "title" => "Tailwind",
                    "content" => "Lorem ipsum tw...",
                    "user_id" => 1
                ]
            ]
        ];

        // Retourner la vue avec les articles
        return view('articles.index', $articles);
    }

    public function show(string $id):View {
        $articles = [
            'articles' => [
                [
                    "id" => 1,
                    "title" => "Architecture MVC",
                    "content" => "Lorem ipsum mvc...",
                    "user_id" => 3
                ],
                [
                    "id" => 2,
                    "title" => "Tailwind",
                    "content" => "Lorem ipsum tw...",
                    "user_id" => 1
                ]
            ]
        ];  

        foreach($articles['article'] as $article) {
            if($article["id"] == $id) {
                return view('articles.show', $article);
            } 
        }

        return view() //404
    }
}
