<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{   
    public function __construct(){
        $this->middleware('auth')->except('article');
    }
    
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
                'img'=>$request->file('img')? $request->file('img')->store('public/copertina'): 'img/default.jpg'
                
                ]
            );
            // dd($article);
            return redirect(route('homepage'))->with('message', 'Il tuo articolo è stato correttamente pubblicato');
        }
        
        public function detail($id){
            
            $articles=Article::orderBy('created_at' , 'desc')->get();
            foreach($articles as $article){
                if($article->id = $id){
                    
                    return view('article/detail', compact('article'));
                }
            }
            
        }
        
        public function update(Article $article){
            return view('article/update', compact('article'));
            
        }
        
        public function edit(UpdateRequest $request , Article $article){
            $article->title=$request->title;
            $article->description=$request->description;
            $article->author=$request->author;
            
            if($request->file('img')){
                
                $article->img=$request->file('img')->store('public/copertina');
                
            }
            $article->save();
            return redirect(route('article.home', compact('article')));
        }

        public function delete(Article $article){
            $article->delete();
            return redirect(route('article.home'));
        }

        public function articleUser(){
            $articles= Article::where('author', Auth::user()->name)->get();
            return view('article/user', compact('articles'));
        }
            

    }
        