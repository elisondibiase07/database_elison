<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{   
    public function article(){
        $articles=Article::orderBy('created_at', 'desc')->get();
       return view('article/index', compact('articles'));
        }

    public function articleCreate(){
        return view('article/create');
    }

    public function articleStore(ArticleRequest $request){
        $article = Article::create(
            [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'author'=>$request->input('author'),
                'img'=>$request->fhas('img')? $request->file('img')->store('public/copertina'): 'img/default.jpg'

            ]
            );
            // dd($article);
        return redirect(route('homepage'))->with('message', 'Il tuo articolo è stato correttamente pubblicato');
    }
}
