<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function getList()
    {
        $articles = Article::with('author')->get();
        return response()->json($articles);
    }

    public function getById($id)
    {
        $article = Article::with('author')->find($id);
        return response()->json($article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->category_id = $request->input('category_id');
        $article->save();
        return response()->json(['message' => 'Article updated successfully']);
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        return response()->json(['message' => 'Article deleted successfully']);
    }
}

